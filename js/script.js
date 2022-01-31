$('#dodajForm').submit(function(){
    event.preventDefault();
    console.log("Dodavanje u imenik");
    const $form =$(this);
    const $input = $form.find('input, select, button, textarea');

    const serijalizacija = $form.serialize();
    console.log(serijalizacija);

    $input.prop('disabled', true);

    req = $.ajax({
        url: './handler/create.php',
        type:'post',
        data: serijalizacija
    });

    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            alert("Uspesno ste dodali kontakt");
            console.log("Dodar kolokvijum");
            location.reload(true);
        }else 
        console.log("Kontakt nije dodat u imenik "+res);
        console.log(res);
    });

    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Desila se greska> '+textStatus, errorThrown)
    });
});
