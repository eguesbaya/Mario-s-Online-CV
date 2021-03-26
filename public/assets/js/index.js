
/**
 * animation for carapace
 */
 const carapace = document.querySelector('.carapace');
 const tuyau = document.querySelector('.t1');
 tuyau.addEventListener('click', function(){
     if (carapace.classList.contains('carapace-move')){
         carapace.classList.remove('carapace-move')
         setTimeout(function(){
             carapace.classList.add('carapace-move');
         }, 5);
     }else{
         carapace.classList.add('carapace-move');
     }
 })