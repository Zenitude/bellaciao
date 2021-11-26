/* Gestion du menu hamburger */

    let menuH = document.querySelector('.menuH');
    let Hmbg = document.querySelectorAll('.hamburger');
    let navHeader = document.querySelector('.navbar ul');

    menuH.addEventListener('click', () =>
    {
        Hmbg[0].classList.toggle('activeMenu');
        Hmbg[1].classList.toggle('activeMenu');
        Hmbg[2].classList.toggle('activeMenu');
        navHeader.classList.toggle('activeMenu');

    });

/* Gestion des labels pour les formulaires */

    let labels = document.querySelectorAll('.labels');
    let inputs = document.querySelectorAll('input');
    let labelArea = document.querySelector('.labelArea');
    let textarea = document.querySelector('textarea');

    if(inputs !== null)
    {
        for(let i = 0 ; i < labels.length ; i++)
        {
            labels[i].addEventListener('click', () =>
            {
                labels[i].style.zIndex = '-1';
                inputs[i].focus();
            });

            inputs[i].addEventListener('focusin', () =>
            {
                    labels[i].style.zIndex = '-1';
            });  

            inputs[i].addEventListener('focusout', () =>
            {
                if(inputs[i].value.length > 0)
                {
                    labels[i].style.zIndex = '-1';
                }
                else 
                {
                    labels[i].style.zIndex = 'auto';    
                }
            });    

            if(inputs[i].getAttribute('autocomplete'))
            {
                inputs.setAttribut('autocomplete', 'on');
            }
        }
    }

    if(labelArea !== null)
    {
    
        labelArea.addEventListener('click', () =>
        {
            labelArea.style.zIndex = '-1';
            textarea.focus();
        });

        textarea.addEventListener('focusin', () =>
        {
            labelArea.style.zIndex = '-1';
        }); 

        textarea.addEventListener('focusout', () =>
        {
            if(textarea.value.length > 0)
            {
                labelArea.style.zIndex = '-1';
            }
            else
            {
                labelArea.style.zIndex = 'auto';
            }
        });
    }