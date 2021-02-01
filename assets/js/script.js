

  function mailSend(formData){
    fetch('handlers/mail.php', {
      method: 'post',
      body: formData,
    }).then(function(response){
      return response.text();
    }).then(function(data){
      alert(data)
    }).catch(function(err){
      console.log(err);
    })
  }


  document.querySelector('#contact_form_btn').onclick = function(){
    let form = new FormData(contact_form);
    mailSend(form); 
  };
  

  
function deleteHash(){
  setTimeout(() => {
    history.pushState('', document.title, window.location.pathname+window.location.search); 
  }, 1) 
  
}


