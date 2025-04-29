document.getElementById('kolomLogin').addEventListener('submit', function(submit){
    const emailUser = 'f1d02310057@gmail.com';
    const passwordUser = 'f1d02310057@';

    let emailLogin = document.getElementById('emailLogin').value.trim();
    let passwordLogin = document.getElementById('passwordLogin').value.trim();

    let isValid = true;
    submit.preventDefault();
    if(emailLogin !== emailUser){
        isValid = false;
    }
    else if(passwordLogin !== passwordUser){
        isValid = false;
    }
    
    if (isValid) {
        document.getElementById('iconSignUpSukses').classList.add('show');
        setTimeout(() => {
            document.getElementById('kolomLogin').submit(); 
        }, 2000);
    }
    else{
        console.log('cek')
        document.getElementById('errorBox').classList.add('show');
        setTimeout(() => {
            document.getElementById('errorBox').classList.remove('show');
        }, 2000);
    }
});