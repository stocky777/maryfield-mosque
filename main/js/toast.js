const toastTrigger = document.getElementById("toasttrig");
const toast = document.getElementById("toast");

if(toastTrigger)
    {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        toastTrigger.addEventListener('click', ()=> 
            {
                toastBootstrap.show()
            })
    }