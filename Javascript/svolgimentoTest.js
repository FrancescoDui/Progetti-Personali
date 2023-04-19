    let pagina;
    let pg=1;
    let bottone=document.createElement('button')
    bottone.innerText='cambia pagina'
    bottone.style.width='100px';
    bottone.style.height='50px';
    document.body.append(bottone)
    let cartella;
    pagina='https://reqres.in/api/users'
    fetch(pagina)
    .then(function(response){
        console.log('then 1: ',response)
        if(response.ok){
        console.log('Richiesta andata a buon fine')
        return response.json()}
        else{
            console.log('ERROR 404')
        }
    })
    .then(function(data){
        console.log('then 2 : ',data)
        console.log(data.data)
        let elemento=data.data
        cartella=document.createElement('div');
        cartella.style.backgroundColor='#a7a7a7';
        cartella.style.width='100%';
        cartella.style.height='500px';
        cartella.style.border='solid 2px';
        cartella.style.display='flex';
        cartella.style.justifyContent='space-around';
        
        for(i=0;i<elemento.length;i++){
            let scheda=document.createElement('div')
            scheda.style.backgroundColor='white';
            scheda.style.width='200px';
            scheda.style.display='flex';
            scheda.style.flexDirection= 'column';
            scheda.style.alignItems='center';
            let nome=document.createElement('h1')
            let email=document.createElement('p')
            let foto=document.createElement('img')
            let contatto=document.createElement('a')
            contatto.href='mailto:'+elemento[i].email;
            nome.innerText=elemento[i].id+" "+elemento[i].first_name+" "+elemento[i].last_name
            email.innerText=elemento[i].email
            foto.src=elemento[i].avatar;
            contatto.innerText='contatto'
            scheda.append(nome,email,foto,contatto)
            cartella.append(scheda)
        }
        document.body.append(cartella)
    })
    .catch(function(error){
        console.log(error)
    })
    .finally(function(){
        console.log('END')
    })
    bottone.addEventListener('click', function(event){
        if(pg==1){
            pg=2; 
            if(cartella)
                cartella.remove()  
            console.log(cartella)
            pagina='https://reqres.in/api/users?page=2'
            fetch(pagina)
        .then(function(response){
            console.log('then 1: ',response)
            if(response.ok){
            console.log('Richiesta andata a buon fine')
            return response.json()}
            else{
                console.log('ERROR 404')
            }
        })
        .then(function(data){
            console.log('then 2 : ',data)
            console.log(data.data)
            let elemento=data.data
            cartella=document.createElement('div');
            cartella.style.backgroundColor='#a7a7a7';
            cartella.style.width='100%';
            cartella.style.height='500px';
            cartella.style.border='solid 2px';
            cartella.style.display='flex';
            cartella.style.justifyContent='space-around';
            
            for(i=0;i<elemento.length;i++){
                let scheda=document.createElement('div')
                scheda.style.backgroundColor='white';
                scheda.style.width='200px';
                scheda.style.display='flex';
                scheda.style.flexDirection= 'column';
                scheda.style.alignItems='center';
                let nome=document.createElement('h1')
                let email=document.createElement('p')
                let foto=document.createElement('img')
                let contatto=document.createElement('a')
                contatto.href='mailto:'+elemento[i].email;
                nome.innerText=elemento[i].id+" "+elemento[i].first_name+" "+elemento[i].last_name
                email.innerText=elemento[i].email
                foto.src=elemento[i].avatar;
                contatto.innerText='contatto'
                scheda.append(nome,email,foto,contatto)
                cartella.append(scheda)
            }
            document.body.append(cartella)
        })
        .catch(function(error){
            console.log(error)
        })
        .finally(function(){
            console.log('END')
        })
        }
        //----------------------------------------------------------pagina 2 
        else {
            pg=1; 
            if(cartella)
                cartella.remove()  
            console.log(cartella)
            pagina='https://reqres.in/api/users?page=1'
            fetch(pagina)
        .then(function(response){
            console.log('then 1: ',response)
            if(response.ok){
            console.log('Richiesta andata a buon fine')
            return response.json()}
            else{
                console.log('ERROR 404')
            }
        })
        .then(function(data){
            console.log('then 2 : ',data)
            console.log(data.data)
            let elemento=data.data
            cartella=document.createElement('div');
            cartella.style.backgroundColor='#a7a7a7';
            cartella.style.width='100%';
            cartella.style.height='500px';
            cartella.style.border='solid 2px';
            cartella.style.display='flex';
            cartella.style.justifyContent='space-around';
            
            for(i=0;i<elemento.length;i++){
                let scheda=document.createElement('div')
                scheda.style.backgroundColor='white';
                scheda.style.width='200px';
                scheda.style.display='flex';
                scheda.style.flexDirection= 'column';
                scheda.style.alignItems='center';
                let nome=document.createElement('h1')
                let email=document.createElement('p')
                let foto=document.createElement('img')
                let contatto=document.createElement('a')
                contatto.href='mailto:'+elemento[i].email;
                nome.innerText=elemento[i].id+" "+elemento[i].first_name+" "+elemento[i].last_name
                email.innerText=elemento[i].email
                foto.src=elemento[i].avatar;
                contatto.innerText='contatto'
                scheda.append(nome,email,foto,contatto)
                cartella.append(scheda)
            }
            document.body.append(cartella)
        })
        .catch(function(error){
            console.log(error)
        })
        .finally(function(){
            console.log('END')
        })
        }
        })
     

    
    