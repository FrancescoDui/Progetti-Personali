const canvas = document.querySelector('canvas');
const scoreValue = document.querySelector('#scoreValue');
const c = canvas.getContext('2d');

// canvas.width = innerWidth;
// canvas.height = innerHeight;

canvas.width = 1024;
canvas.height = 576;

class Player {
    constructor() {
        this.velocity = {
            x: 0,
            y: 0
        };
        this.rotation = 0;
        this.opacity=1
        const image = new Image();
        image.src = './image/Ship_FullHealth.png';
        image.onload = () => {
            const scale = 1;
            this.image = image;
            this.width = image.width * scale;
            this.height = image.height * scale;
            this.position = {
                x: canvas.width / 2 - this.width / 2,
                y: canvas.height - this.height - 20
            };
        };
    }
    draw() {
        c.save();
        c.globalAlpha=this.opacity
        c.translate(this.position.x + this.width / 2, this.position.y + this.height / 2);
        c.rotate(this.rotation);
        c.translate(-this.position.x - this.width / 2, -this.position.y - this.height / 2);
        c.drawImage(
            this.image,
            this.position.x,
            this.position.y,
            this.width,
            this.height
        );
        c.restore();
    }
    update() {
        if (this.image) {
            this.draw();
            this.position.x += this.velocity.x;
        }
    }
}

class InvaderProjectile {
    constructor({ position, velocity }) {
        this.position = position;
        this.velocity = velocity;
        this.width = 3;
        this.height = 10;
    }
    draw() {
        c.fillStyle = 'white';
        c.fillRect(this.position.x, this.position.y, this.width, this.height);
    }
    update() {
        this.draw();
        this.position.x += this.velocity.x;
        this.position.y += this.velocity.y;
    }
}

class Invader {
    constructor({ position }) {
        this.velocity = {
            x: 0,
            y: 0
        };
        const image = new Image();
        image.src = './image/ScoutR.png';
        image.onload = () => {
            const scale = 1.5;
            this.image = image;
            this.width = image.width * scale;
            this.height = image.height * scale;
            this.position = {
                x: position.x,
                y: position.y
            };
        };
    }
    draw() {
        c.drawImage(
            this.image,
            this.position.x,
            this.position.y,
            this.width,
            this.height
        );
    }
    update({ velocity }) {
        if (this.image) {
            this.draw();
            this.position.x += velocity.x;
            this.position.y += velocity.y;
        }
    }
    shoot(invaderProjectiles) {
        if(this.position){
            const projectilePosition = {
                x: this.position.x + this.width / 2,
                y: this.position.y + this.height
            };
            const projectileVelocity = {
                x: 0,
                y: 5
            };
            invaderProjectiles.push(new InvaderProjectile({
                position: projectilePosition,
                velocity: projectileVelocity
            }));
        }
    }
}

class Grid {
    constructor() {
        this.position = {
            x: 0,
            y: 0
        };
        this.velocity = {
            x: 3,
            y: 0
        };
        this.invaders = [];
        const rows = Math.floor(Math.random() * 5 + 2);
        const columns = Math.floor(Math.random() * 10 + 5);
        this.width = columns * 60;
        for (let x = 0; x < columns; x++) {
            for (let y = 0; y < rows; y++) {
                this.invaders.push(
                    new Invader({
                        position: {
                            x: x * 50,
                            y: y * 50
                        }
                    })
                );
            }
        }
    }
    update() {
        this.position.x += this.velocity.x;
        this.position.y += this.velocity.y;
        this.velocity.y = 0;
        if (this.position.x + this.width >= canvas.width || this.position.x <= 0) {
            this.velocity.x = -this.velocity.x;
            this.velocity.y = 30;
        }
    }
}

class Projectile {
    constructor({ position, velocity }) {
        this.position = position;
        this.velocity = velocity;
        this.radius = 3;
    }
    draw() {
        c.beginPath();
        c.arc(this.position.x, this.position.y, this.radius, 0, Math.PI * 2);
        c.fillStyle = '#1BE521';
        c.fill();
        c.closePath();
    }
    update() {
        this.draw();
        this.position.x += this.velocity.x;
        this.position.y += this.velocity.y;
    }
}

class Particle {
    constructor({ position, velocity, radius, color }) {
        this.position = position;
        this.velocity = velocity;
        this.radius = radius;
        this.color=color;
        this.opacity=1;
    }
    draw() {
        c.save()
        c.globalAlpha=this.opacity
        c.beginPath();
        c.arc(this.position.x, this.position.y, this.radius, 0, Math.PI * 2);
        c.fillStyle = this.color;
        c.fill();
        c.closePath();
        c.restore()
    }
    update() {
        this.draw();
        this.position.x += this.velocity.x;
        this.position.y += this.velocity.y;
        this.opacity-=0.01;
    }
}

const player = new Player();
const grids = [new Grid()];
const projectiles = [];
const invaderProjectiles = [];
const particles=[]
const keys = {
    a: {
        pressed: false
    },
    d: {
        pressed: false
    },
    space: {
        pressed: false
    }
};
let frames = 0;
let randomInterval = Math.floor(Math.random() * 500 + 500);
let game={
    over:false,
    active:true
}
let score=0
function createParticles({creator,color}){
    for(let i = 0;i<15;i++){
        particles.push(new Particle({
            position:{
                x:creator.position.x + creator.width/2,
                y:creator.position.y + creator.height/2
            },
            velocity:{
                x:(Math.random()-0.5)*2,
                y:(Math.random()-0.5)*2
            },
            radius:Math.random()*3,
            color:color || 'white'
        }))
    }
}

function animate() {
    if(!game.active) return
    requestAnimationFrame(animate);
    c.fillStyle = 'black';
    c.fillRect(0, 0, canvas.width, canvas.height);
    player.update();
    particles.forEach((particle,index)=>{
        if(particle.opacity<=0){
            setTimeout(()=>{
                particles.splice(index,1)
            },0)
        }else{
            particle.update();
        }
    })
    invaderProjectiles.forEach((invaderProjectile,index) => {
        if(invaderProjectile.position.y + invaderProjectile.height>=canvas.height){
            setTimeout(()=>{
                invaderProjectiles.splice(index,1)
            })
        }else{
            invaderProjectile.update();
        }
        //projectile hit player
        if(invaderProjectile.position.y + invaderProjectile.height <= 
            player.position.y && invaderProjectile.position.x + invaderProjectile.width>=
            player.position.x && invaderProjectile.position.x<= player.position.x +player.width ){
                setTimeout(()=>{
                    invaderProjectiles.splice(index,1)
                    player.opacity=0
                    game.over=true
                },0)
                setTimeout(()=>{
                    game.active=false
                },2000)
                createParticles({
                    creator:player,
                    color:'white'
                })
            console.log('you lose')
        }
    });
    projectiles.forEach((projectile, index) => {
        if (projectile.position.y + projectile.radius <= 0) {
            setTimeout(() => {
                projectiles.splice(index, 1);
            }, 0);
        } else {
            projectile.update();
        }
    });
    grids.forEach((grid, gridIndex) => {
        grid.update();
        grid.invaders.forEach((invader, i) => {
            invader.update({ velocity: grid.velocity });
            //projectiles hit enemy
            projectiles.forEach((projectile, j) => {
                if (projectile.position.y - projectile.radius <=
                    invader.position.y + invader.height &&
                    projectile.position.x + projectile.radius >=
                    invader.position.x &&
                    projectile.position.x - projectile.radius <=
                    invader.position.x + invader.width &&
                    projectile.position.y +
                    projectile.radius >= invader.position.y
                ) {
                    setTimeout(() => {
                        const invaderFound = grid.invaders.find(invader2 => {
                            return invader2 === invader;
                        });
                        const projectileFound = projectiles.find(projectile2 => {
                            return projectile2 === projectile;
                        });
                        //remove invader and projectile
                        if (invaderFound && projectileFound) {
                            score+=100
                            scoreValue.innerHTML=score
                            createParticles({
                                creator:invader,
                                color:'#D73030'
                            })

                            grid.invaders.splice(i, 1);
                            projectiles.splice(j, 1);
                            if (grid.invaders.length > 0) {
                                const firstInvader = grid.invaders[0];
                                const lastInvader = grid.invaders[grid.invaders.length - 1];
                                grid.width = lastInvader.position.x - firstInvader.position.x + lastInvader.width;
                                grid.position.x = firstInvader.position.x;
                            } else {
                                grids.splice(gridIndex, 1);
                            }
                        }
                    }, 0);
                }
            });
        });
        // spawn invader projectiles
        if (frames % 100 === 0 && grid.invaders.length > 0) {
            grid.invaders[Math.floor(Math.random() * grid.invaders.length)].shoot(invaderProjectiles);
        }
    });
    if (keys.a.pressed && player.position.x >= 0) {
        player.velocity.x = -5;
        player.rotation = -0.15;
    } else if (keys.d.pressed && player.position.x + player.width <= canvas.width) {
        player.velocity.x = 5;
        player.rotation = 0.15;
    } else {
        player.velocity.x = 0;
        player.rotation = 0;
    }
    // spawning invaders
    if (frames % randomInterval === 0) {
        grids.push(new Grid());
        randomInterval = Math.floor(Math.random() * 500 + 500);
        frames = 0;
    }
    frames++;
}
animate();
addEventListener('keydown', ({ key }) => {
    if(game.over) return 
    switch (key) {
        case 'a':
            keys.a.pressed = true;
            break;
        case 'd':
            keys.d.pressed = true;
            break;
        case ' ':
            projectiles.push(new Projectile({
                position: {
                    x: player.position.x + player.width / 2,
                    y: player.position.y + player.height / 4
                },
                velocity: {
                    x: 0,
                    y: -5
                }
            }));
            break;
    }
});
addEventListener('keyup', ({ key }) => {
    switch (key) {
        case 'a':
            keys.a.pressed = false;
            break;
        case 'd':
            keys.d.pressed = false;
            break;
        case ' ':
            break;
    }
});
