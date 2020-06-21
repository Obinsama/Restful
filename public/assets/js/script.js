$(document).ready(function(){
    var html='';
    $.ajax({
        type:'post', // change le type de route de get a post
        url:'getall',//tu mets le nom e la route sans parametre
        data:{
            id:'ras',//voici en fait les parametres
            action:'getall',//voici en fait les parametres
        },
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},// le token
        async:false,
        success:function (data) {
            //console.log(data)
            var html='';
            for(var i=0;i<data['transactions'].length;i++){
              //  console.log(data[i].unique_id);
                if(data['transactions'][i].statut==12){
                    html+='<tr role="row" class="table" value="'+data['transactions'][i].unique_id+'"><td  tabindex="0" class="sorting_1">'+data['transactions'][i].client_id+'</td><td>'+data['transactions'][i].numero_tel+'</td><td>'+data['transactions'][i].montant+' FCFA</td><td><button class="btn btn-success btn-round btn-sm"><span class="btn-label"><i class="material-icons">check</i></span>REUSSIE<div class="ripple-container"></div></button></td><td>'+data['transactions'][i].date_et_heure+'</td><td class="text-right"><a href="#" class="btn btn-link btn-info btn-just-icon edit"><i class="material-icons">visibility</i></a></td></tr>';
                }else if(data['transactions'][i].statut==11){
                    html+='<tr role="row" class="table" value="'+data['transactions'][i].unique_id+'"><td  tabindex="0" class="sorting_1">'+data['transactions'][i].client_id+'</td><td>'+data['transactions'][i].numero_tel+'</td><td>'+data['transactions'][i].montant+' FCFA</td><td><button class="btn btn-warning btn-round btn-sm"><span class="btn-label"><i class="material-icons">check</i></span>En cours<div class="ripple-container"></div></button></td><td>'+data['transactions'][i].date_et_heure+'</td><td class="text-right"><a href="#" class="btn btn-link btn-info btn-just-icon edit"><i class="material-icons">visibility</i></a></td></tr>';
                }else{
                    html+='<tr role="row" class="table" value="'+data['transactions'][i].unique_id+'"><td  tabindex="0" class="sorting_1">'+data['transactions'][i].client_id+'</td><td>'+data['transactions'][i].numero_tel+'</td><td>'+data['transactions'][i].montant+' FCFA</td><td><button class="btn btn-danger btn-round btn-sm"><span class="btn-label"><i class="material-icons">clear</i></span>Echouee<div class="ripple-container"></div></button></td><td>'+data['transactions'][i].date_et_heure+'</td><td class="text-right"><a href="#" class="btn btn-link btn-info btn-just-icon edit"><i class="material-icons">visibility</i></a></td></tr>';
                }

            }
            $('#boxes').children('div:nth-child(1)').find('h3').text(data['boxes'].total);
            $('#boxes').children('div:nth-child(2)').find('h3').text(data['boxes'].failed);
            $('#boxes').children('div:nth-child(3)').find('h3').text(data['boxes'].success);
            $('#boxes').children('div:nth-child(4)').find('h3').text(data['boxes'].totalmoney);
            $('#dataflow').html(html).fadeIn('slow');
            //  $('#dataflow').load(html).fadeIn("slow");
            // $.each(data,function () {
            //     console.log(data[0])
            // });
            // each()....
            // var html='<option>'+data['filere']+'</option>';//ici tu dois verifier que ce qui sort du json c'est un tableau
            // $('#select_filiere').append(html);
            //fin each
        },
        error:function (e) {
            console.log(e);
        }
    });
    setInterval(function () {
        $.ajax({
            type:'post', // change le type de route de get a post
            url:'getlatest',//tu mets le nom e la route sans parametre
            data:{
                id:'ras',//voici en fait les parametres
                action:'getlatest',//voici en fait les parametres
            },
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},// le token
            async:false,
            success:function (data) {
                var html='';
               // console.log($('#dataflow').children('tr').first().attr('value'));
                if(data['transaction'].statut==12){
                    html='<tr role="row" class="table" value="'+data['transaction'].unique_id+'"><td  tabindex="0" class="sorting_1">'+data['transaction'].client_id+'</td><td>'+data['transaction'].numero_tel+'</td><td>'+data['transaction'].montant+' FCFA</td><td><button class="btn btn-success btn-round btn-sm"><span class="btn-label"><i class="material-icons">check</i></span>REUSSIE<div class="ripple-container"></div></button></td><td>'+data['transaction'].date_et_heure+'</td><td class="text-right"><a href="#" class="btn btn-link btn-info btn-just-icon edit"><i class="material-icons">visibility</i></a></td></tr>';
                }else if(data['transaction'].statut==11){
                     html='<tr role="row" class="table" value="'+data['transaction'].unique_id+'"><td  tabindex="0" class="sorting_1">'+data['transaction'].client_id+'</td><td>'+data['transaction'].numero_tel+'</td><td>'+data['transaction'].montant+' FCFA</td><td><button class="btn btn-warning btn-round btn-sm"><span class="btn-label"><i class="material-icons">check</i></span>En cours<div class="ripple-container"></div></button></td><td>'+data['transaction'].date_et_heure+'</td><td class="text-right"><a href="#" class="btn btn-link btn-info btn-just-icon edit"><i class="material-icons">visibility</i></a></td></tr>';
                }else{
                     html='<tr role="row" class="table" value="'+data['transaction'].unique_id+'"><td  tabindex="0" class="sorting_1">'+data['transaction'].client_id+'</td><td>'+data['transaction'].numero_tel+'</td><td>'+data['transaction'].montant+' FCFA</td><td><button class="btn btn-danger btn-round btn-sm"><span class="btn-label"><i class="material-icons">clear</i></span>Echouee<div class="ripple-container"></div></button></td><td>'+data['transaction'].date_et_heure+'</td><td class="text-right"><a href="#" class="btn btn-link btn-info btn-just-icon edit"><i class="material-icons">visibility</i></a></td></tr>';
                }

                $('#boxes').children('div:nth-child(1)').find('h3').text(data['boxes'].total);
                $('#boxes').children('div:nth-child(2)').find('h3').text(data['boxes'].failed);
                $('#boxes').children('div:nth-child(3)').find('h3').text(data['boxes'].success);
                $('#boxes').children('div:nth-child(4)').find('h3').text(data['boxes'].totalmoney);
                var latest_id=$('#dataflow').children('tr').first().attr('value');
                if(data['transaction'].unique_id!=latest_id){
                   $('#dataflow').prepend(html).fadeIn("slow");
                }

                // html=$('#dataflow').html();
                // $('#dataflow').html(html);

                // for(var i=0;i<data.length;i++){
                //     console.log(data[i]);
                //
                //
                // }
                // $.each(data,function () {
                //     console.log(data[0])
                // });
                // each()....
                // var html='<option>'+data['filere']+'</option>';//ici tu dois verifier que ce qui sort du json c'est un tableau
                // $('#select_filiere').append(html);
                //fin each
            },
            error:function (e) {
                console.log(e);
            }
        });
        //alert('test');
    },10000)
});
