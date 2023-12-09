
$(document).ready(function(){
    
    $('#promoMes').hide();
    $('#promoPorc').hide();
    $('#promoMonto').hide();
    $('#leyenda').hide();
    $("#rowDescPorc").hide();
    $("#rowDescMonto").hide();
    $("#rowEnganche").hide();
    $("#rowAnualidad").hide();
    $("#rowSldC").hide();
    $("#promoEsp").hide();
    $("#imagen").hide();

    var rowClon1 = $(".montoEnganche:last").clone();
    var i = 1;
    
    let table = new DataTable('#myTable');
    
   // inpImg.addEventListener('change',async (event)=>{
        //const base64URL = await encodeFileAsBase64URL(inpImg.files[0]);
     /*    const file = inpImg.files[0];
        console.log(event);
        const reader = new FileReader();
        reader.addEventListener('load',()=>{ */
          //  console.log(reader.result);
        /* });
        reader.readAsDataURL(file);
    }); */

   /*  imgDesa.addEventListener('change',e=>{
        console.log(e); */
       /*  $.ajax({
            url:"Cotizador/getImgDes?id="+e,
            type:"POST",
            dataType:"json",
            success:function(res2){
                
                nodo2.value = res2[0]['superficie'];
                valMt.value = res2[0]['precio_mt2'];
                valSup.value = res2[0]['superficie'];
                
                var v1 = parseFloat(res2[0]['superficie']).toFixed(2);
                var v2 = parseFloat(res2[0]['precio_mt2']).toFixed(2);
                var v3 = parseFloat(v1*v2);
                
                imgDesa.value = res2[0]['desarrollos_id'];
                console.log(res2[0]['desarrollos_id']);
                
                precioF.value = v3.toFixed(2);
                total.value = v3.toFixed(2);
                precioMtFinal.value = v2;
                
            }
        }); */
    //});
     
});

function func1(){
    var check = document.getElementById('checkbox1');
    var opc = document.getElementById('promoMes');

    if(check.checked == true){
        opc.style.display = "block";
    }else{
        opc.style.display = "none";
    }
}

function func2(){
    var check = document.getElementById('checkbox2');
    var opc = document.getElementById('promoPorc');

    if(check.checked == true){
        opc.style.display = "block";
    }else{
        opc.style.display = "none";
    }
}

function func3(){
    var check = document.getElementById('checkbox3');
    var opc = document.getElementById('promoMonto');

    if(check.checked == true){
        opc.style.display = "block";
    }else{
        opc.style.display = "none";
    }
}

function func4(){
    var check = document.getElementById('checkbox4');
    var opc = document.getElementById('promoMonto');
    var opc1 = document.getElementById('promoPorc');

    if(check.checked == true){
        opc.style.display = "block";
        opc1.style.display = "block";
    }else{
        opc.style.display = "none";
        opc1.style.display = "none";
    }
}

var click = 1;
function addEng(){
    let div = document.createElement('div');
        div.id='montoEnganche'+click;
        div.className = 'row rowEnganche';
    let div2 = document.createElement('div'); //promoMonto
        div2.className = 'text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1';

    let div3 = document.createElement('div'); //montoEng
        div3.className = 'input-group mb-3';
    
        let span1 = document.createElement('span');
            span1.textContent = '$';
            span1.id = 'basic-addon2';
            span1.className = 'input-group-text';
        
            let inputEng = document.createElement('input');
                inputEng.id = 'montoEng'+click;
                inputEng.className = 'form-control';
                inputEng.name = 'montoEng'+click;
           //     inputEng.setAttribute('onfocusout',"enganche()");
    
    let div4 = document.createElement('div');
        div4.className = 'text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1';

        let div5 = document.createElement('div');
            div5.className = 'col-12';
        
            let div6 = document.createElement('div');
                div6.className = 'input-group';

                let inFecEng = document.createElement('input');
                inFecEng.className = 'form-control';
                inFecEng.type = 'date';
                inFecEng.name = 'fecEng'+click;
                inFecEng.id = 'fecEng'+click;
                inFecEng.setAttribute('onfocusout',"countEng()");

            let span2 = document.createElement('span');
                span2.className = 'input-group-append';

                let span3 = document.createElement('span');
                    span3.className = 'input-group-text bg-light d-block';

                let ipan = document.createElement('i');
                    ipan.className = 'fa fa-calendar';
        
    if(click<7){
        click += 1;
        console.log(click);

        div6.appendChild(inFecEng);
        div6.appendChild(span2)
        div5.appendChild(div6);
        div4.appendChild(div5);

        span1.appendChild(inputEng);

        div3.appendChild(span1);
        div3.appendChild(inputEng);

        div2.appendChild(div3);

        div.appendChild(div2);
        div.appendChild(div4);

        document.getElementById('montoEnganche').appendChild(div);
    }
}

function delEng(){
    var rowsEng = document.querySelectorAll('.rowEnganche');
        console.log(rowsEng.length);
    if(click>1){
        console.log(click);
        click -=1; 
        console.log(click);
        var row = document.getElementById("montoEnganche"+(rowsEng.length).toString());
        row.parentNode.removeChild(row)
        /* console.log(row); */
    }
}

var clickA = 1;
function addAnu(){
        let div = document.createElement('div');
            div.id='montoAnualidad'+clickA;
            div.className = 'row rowAnualidad';
        
        let div2 = document.createElement('div'); //promoMonto
            div2.className = 'text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1';

        let div3 = document.createElement('div'); //montoEng
            div3.className = 'input-group mb-3';
    
        let span1 = document.createElement('span');
            span1.textContent = '$';
            span1.id = 'basic-addon2';
            span1.className = 'input-group-text';
        
            let inputAnu = document.createElement('input');
                inputAnu.id = 'montoAnu'+clickA;
                inputAnu.className = 'form-control';
                inputAnu.name = 'montoAnu'+clickA;
                
              //  inputAnu.onfocusout = function(){enganche()};
    
    let div4 = document.createElement('div');
        div4.className = 'text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1';

        let div5 = document.createElement('div');
            div5.className = 'col-12';
        
            let div6 = document.createElement('div');
                div6.className = 'input-group date';

                let inFecAnu = document.createElement('input');
                inFecAnu.className = 'form-control';
                inFecAnu.type = 'date';
                inFecAnu.name = 'fecAnu'+clickA;
                inFecAnu.id = 'fecAnu'+clickA;
                //inFecAnu.onfocusout = function(){countEng()};
                inFecAnu.setAttribute('onfocusout',"countAnualidad()");

            let span2 = document.createElement('span');
                span2.className = 'input-group-append';

                let span3 = document.createElement('span');
                    span3.className = 'input-group-text bg-light d-block';

                let ipan = document.createElement('i');
                    ipan.className = 'fa fa-calendar';
        
    if(clickA<12){
        clickA += 1;
        console.log(clickA);

        div6.appendChild(inFecAnu);
        div6.appendChild(span2)
        div5.appendChild(div6);
        div4.appendChild(div5);

        span1.appendChild(inputAnu);

        div3.appendChild(span1);
        div3.appendChild(inputAnu);

        div2.appendChild(div3);

        div.appendChild(div2);
        div.appendChild(div4);

        document.getElementById('montoAnualidad').appendChild(div);
    }  
}

var clickSld = 1;
function addSldC(){
        let div = document.createElement('div');
            div.id='montoSaldoCon'+clickSld;
            div.className = 'row rowSaldoCon';
        
        let div2 = document.createElement('div'); //promo
            div2.className = 'text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1';

        let div3 = document.createElement('div'); //monto
            div3.className = 'input-group mb-3';
    
        let span1 = document.createElement('span');
            span1.textContent = '$';
            span1.id = 'basic-addon2';
            span1.className = 'input-group-text';
        
            let inputSldC = document.createElement('input');
                inputSldC.id = 'montoSldCon'+clickSld;
                inputSldC.className = 'form-control';
                inputSldC.name = 'montoSldCon'+clickSld;
              //  inputAnu.onfocusout = function(){enganche()};
    
    let div4 = document.createElement('div');
        div4.className = 'text-xs col-xl-4 col-md-4 font-weight-bold text-primary text-uppercase mb-1';

        let div5 = document.createElement('div');
            div5.className = 'col-12';
        
            let div6 = document.createElement('div');
                div6.className = 'input-group date';

                let inFecSld = document.createElement('input');
                inFecSld.className = 'form-control';
                inFecSld.type = 'date';
                inFecSld.name = 'fecSld'+clickSld;
                inFecSld.id = 'fecSld'+clickSld;
                //inFecAnu.onfocusout = function(){countEng()};
                inFecSld.setAttribute('onfocusout',"countSaldoC()");

            let span2 = document.createElement('span');
                span2.className = 'input-group-append';

                let span3 = document.createElement('span');
                    span3.className = 'input-group-text bg-light d-block';

                let ipan = document.createElement('i');
                    ipan.className = 'fa fa-calendar';
        
    if(clickSld<6){
        clickSld += 1;
        console.log(clickSld);

        div6.appendChild(inFecSld);
        div6.appendChild(span2)
        div5.appendChild(div6);
        div4.appendChild(div5);

        span1.appendChild(inputSldC);

        div3.appendChild(span1);
        div3.appendChild(inputSldC);

        div2.appendChild(div3);

        div.appendChild(div2);
        div.appendChild(div4);

        document.getElementById('montoSaldoCon').appendChild(div);
    }    
}

function delAnu(){
    var rowsAnu = document.querySelectorAll('.rowAnualidad');
    console.log(rowsAnu);
    if(clickA>0){
        clickA -=1;
        
        var rowA = document.getElementById("montoAnualidad"+(rowsAnu.length-1).toString());
        rowA.parentNode.removeChild(rowA)
        console.log("montoAnualidad"+(rowsAnu.length-1).toString());
    }
}

function delSldC(){
    var rowsSld = document.querySelectorAll(".rowSaldoCon");
    console.log(rowsSld);
    if(clickSld>0){
        clickSld--;
        var rowSld = document.getElementById('montoSaldoCon'+(rowsSld.length-1).toString());
        rowSld.parentNode.removeChild(rowSld);
        console.log("montoSaldoCon"+(rowsSld.length-1).toString());
    }
    
}

function getLotePrice(){
    //var op = document.getElementById('loteSelect').value;
    //var edo = $('#loteSelect option:selected').text().trim();
    //alert(op);
    var op = document.getElementById('loteSelect').value;
    var nodoMostRes = document.getElementById('precioMt2');
    var valPmt = document.getElementById('premt2');
   	var contMost = "";
    
    $.ajax({
        url:"Cotizador/getPrice?id="+op,
        type:"POST",
        dataType:"json",
        beforeSend:function(){
            console.log(op);
        },
        success:function(res1){
            nodoMostRes.innerHTML = res1[0]['precio_mt2'];
            valPmt.value = res1[0]['precio_mt2'];
            
        }
    });
}

function getSuperficie(){

    var op = document.getElementById('loteSelect').value;
    var nodo2 = document.getElementById('superficie');
    var valMt = document.getElementById('precioMt2');
    var valSup = document.getElementById('superf');
    var precioF = document.getElementById('precioFinal');
    var total = document.getElementById('totalFinal');

    var checkDescPorc = document.getElementById('checkbox2');
    var checkDescMonto = document.getElementById('checkbox3');
    var checkDescPromoGH = document.getElementById('checkbox4');
    var porcDesc = document.getElementById('porcDesc');//col datos
    var montoDesc = document.getElementById('montoDesc');//col datos

    var descMt = document.getElementById('descMt');//col datos
    var porcentajeDesc = document.getElementById('porcentajeDesc');//col datos
    var precDescMonto = document.getElementById('precDescMonto');//col datos
    var descMontoMt2 = document.getElementById('descMontoMt2');//col datos
    var precioMtFinal = document.getElementById('precioMtFinal');//col datos

    var tipoLote = document.getElementById('tipoLote');
    var imagen = document.getElementById('imagen');
    
    if(checkDescPorc.checked){
        porcDesc.value = '';
    }
    if(checkDescMonto.checked){
        montoDesc.value = '';
    }
    if(checkDescPromoGH.checked){
        montoDesc.value = '';
        porcDesc.value = '';
    }

    descMt.value = '';
    porcentajeDesc.value = '';
    precDescMonto.value = '';
    descMontoMt2.value = '';
    
    $.ajax({
        url:"Cotizador/getSurface?id="+op,
        type:"POST",
        dataType:"json",
        success:function(res2){
            
            nodo2.value = res2[0]['superficie'];
            valMt.value = res2[0]['precio_mt2'];
            valSup.value = res2[0]['superficie'];
            switch (res2[0]['tipo']) {
                case 'S':
                    tipoLote.innerHTML = 'ESTANDAR';        
                    break;
                case 'PR':
                    tipoLote.innerHTML = 'PREMIUM';        
                    break;
                case 'PL':
                    tipoLote.innerHTML = 'PLATINO';        
                    break;
                default:
                    break;
            }
            
            var v1 = parseFloat(res2[0]['superficie']).toFixed(2);
            var v2 = parseFloat(res2[0]['precio_mt2']).toFixed(2);
            var v3 = parseFloat(v1*v2);
            $("#imagen").show();
            //imgDesa.value = res2[0]['desarrollos_id'];
            //se agrega desarrollo id al input obtener al momento de imprimir...
   
            buscaImg(res2[0]['desarrollos_id']);
            precioF.value = v3.toFixed(2);
            total.value = v3.toFixed(2);
            precioMtFinal.value = v2;
           
            
        }
    });
}

function getPrivada(){
    var privada = document.getElementById('privSelect');
    var desarrollo = document.getElementById('desaSelect');

    $.ajax({
        url:"Cotizador/getPrivada?id="+desarrollo.value,
        type:"POST",
        dataType:"json",
        success:function(resp){
            var priv = document.getElementById('privSelect');
            priv.innerHTML = "";
                if(resp.length===0){
                    console.log("vacio...");
                    priv.setAttribute('disabled','');
                }else{
                    priv.removeAttribute('disabled');
                    resp.forEach(function(ele){
                        console.log(ele.id,ele.nombre);
                        var opt = document.createElement('option');
                        opt.value = ele.id;
                        opt.innerHTML = ele.nombre;
                        priv.appendChild(opt);
                    });
                } 
        },
    });
}

function getLote(){}

function descPorc(){
    var checkDescPorc = document.getElementById('checkbox2');
    var porcDesc = document.getElementById('porcDesc');//col datos
    var total = document.getElementById('precioFinal');//col cotiza
    var pMt = document.getElementById('precioMt2');//col cotiza
    var pMtFinal = document.getElementById('precioMtFinal');//col cotiza
    var inputDescMt = document.getElementById('descMt');//col cotiza
    var inputTotalFinal = document.getElementById('totalFinal');//col cotiza
    var checkPromoGH = document.getElementById('checkbox4');

    var rowPorcDesc = document.getElementById('rowDescPorc');
    
    var inputDescMonto = document.getElementById('porcentajeDesc');
    var descuento = parseFloat(porcDesc.value/100)*parseFloat(total.value);
    var totalDescuento = parseFloat(total.value - descuento);
    var descMt = parseFloat(porcDesc.value/100)*parseFloat(pMt.value);

    var pMtDesc = parseFloat(pMt.value)-parseFloat(descMt);

    if(checkDescPorc.checked || checkPromoGH.checked){
        inputDescMonto.value = descuento.toFixed(2);
        inputDescMt.value = descMt.toFixed(2);
        inputTotalFinal.value = totalDescuento.toFixed(2);
        pMtFinal.value = pMtDesc.toFixed(2);
        
        $('#rowDescPorc').show();
    
        console.log(descuento.toFixed(2),totalDescuento.toFixed(2),pMtDesc.toFixed(2));
    }
}

function verificaDescMonto(){
    var checkDescMont = document.getElementById('checkbox3');
    var checkPromoGH = document.getElementById('checkbox4');
    var montoDesc = document.getElementById('montoDesc');//col datos
    if(checkDescMont.checked || checkPromoGH.checked){
        montoDesc.value = '';
    }
}

function descMonto(){
    var checkDescPorc = document.getElementById('checkbox2');
    var checkDescMont = document.getElementById('checkbox3');
    var checkPromoGH = document.getElementById('checkbox4');
    var montoDesc = document.getElementById('montoDesc');//col datos
    var superficie = document.getElementById('superficie');//col datos
    var total = document.getElementById('totalFinal');//col cotiza
    var pMt = document.getElementById('precioMtFinal');//col cotiza
    var precDescMonto = document.getElementById('precDescMonto');//col cotiza
    var inputTotalFinal = document.getElementById('totalFinal');//col cotiza
    var inputDescMonto = document.getElementById('descMontoMt2');
    var precio_mt2 = document.getElementById('precioMt2');
    
    //var descMt = parseFloat(porcDesc.value/100)*parseFloat(pMt.value);
    //validar si cuando se hace check al porcentaje el input descuentoMonto tiene valor, de ser así limpiarlo
    if(checkDescMont.checked && checkDescPorc.checked || checkPromoGH.checked ){
       // console.log(descuento.toFixed(2),parseFloat(pMt.value),parseFloat(pMt.value),parseFloat(montoDesc.value));
       if(parseFloat(montoDesc.value)>parseFloat(pMt.value)){
            console.log("El valor a descontar es mayor que el monto actual...");
        }else if(montoDesc.value != ''){
            $("#rowDescMonto").show();
            
            var descuento = parseFloat(pMt.value)-parseFloat(montoDesc.value);
            var precLoteFinal = parseFloat(superficie.value)*descuento;
            var descLoteMonto = parseFloat(montoDesc.value)*parseFloat(superficie.value);
            //var totalDescuento = parseFloat(total.value - descuento);
            inputDescMonto.value = montoDesc.value;
            pMt.value = descuento.toFixed(2);
            total.value = precLoteFinal.toFixed(2);
            precDescMonto.value = descLoteMonto.toFixed(2);
            
            console.log(descuento.toFixed(2),precLoteFinal.toFixed(2));
        }
    }
    
    if(checkDescMont.checked && checkDescPorc.checked===false ){
       // console.log(descuento.toFixed(2),parseFloat(pMt.value),parseFloat(pMt.value),parseFloat(montoDesc.value));
        if(parseFloat(montoDesc.value)>parseFloat(pMt.value)){
            console.log("El valor a descontar es mayor que el monto actual...");
        }else{
            var descuento = parseFloat(precio_mt2.value)-parseFloat(montoDesc.value);
            var precLoteFinal = parseFloat(superficie.value)*descuento;
            var descLoteMonto = parseFloat(montoDesc.value)*parseFloat(superficie.value);
            inputDescMonto.value = montoDesc.value;
            pMt.value = descuento.toFixed(2);
            total.value = precLoteFinal.toFixed(2);
            precDescMonto.value = descLoteMonto.toFixed(2);
            console.log(descuento.toFixed(2),precLoteFinal.toFixed(2),descLoteMonto.toFixed(4));
        }
    }

   /*  if(checkDescMont.checked && checkDescPorc.checked===false ){
        // console.log(descuento.toFixed(2),parseFloat(pMt.value),parseFloat(pMt.value),parseFloat(montoDesc.value));
         if(parseFloat(montoDesc.value)>parseFloat(pMt.value)){
             console.log("El valor a descontar es mayor que el monto actual...");
         }else{
             var descuento = parseFloat(precio_mt2.value)-parseFloat(montoDesc.value);
             var precLoteFinal = parseFloat(superficie.value)*descuento;
             var descLoteMonto = parseFloat(montoDesc.value)*parseFloat(superficie.value);
             inputDescMonto.value = montoDesc.value;
             pMt.value = descuento.toFixed(2);
             total.value = precLoteFinal.toFixed(2);
             precDescMonto.value = descLoteMonto.toFixed(2);
             console.log(descuento.toFixed(2),precLoteFinal.toFixed(2),descLoteMonto.toFixed(4));
         }
     } */

}

function enganche(){
    var montoEnganche = document.getElementById('montoDescEnganche');
    var montoEng = document.getElementById('montoApartado');
    var inputTotalFinal = document.getElementById('totalFinal');//col cotiza
    var totalFinanciar = document.getElementById('totalFinanciar');

    if(inputTotalFinal.value != ''){
        var totalEnganche = parseFloat(inputTotalFinal.value)-parseFloat(montoEng.value);
        montoEnganche.value = parseFloat(montoEng.value);
        inputTotalFinal.value = parseFloat(totalEnganche).toFixed(2);
        totalFinanciar.value = parseFloat(totalEnganche).toFixed(2);
        console.log(totalEnganche.toFixed(2),montoEng.value);
    }

}

function anualidad(){
    var montoAnualida = document.getElementById('montoDescAnualidad');
    var montoAnu = document.getElementById('montoAnu');
    var inputTotalFinal = document.getElementById('totalFinal');//col cotiza
    var totalFinanciar = document.getElementById('totalFinanciar');

    if(inputTotalFinal.value != ''){
        var totalAnu = parseFloat(inputTotalFinal.value)-parseFloat(montoAnu.value);
        console.log(inputTotalFinal.value,totalAnu, montoAnu.value);
    }
}

function countEng(){
    var sum = 0;
    var band = click-1;
    var sumaTotal = 0;
    var apartado = document.getElementById('montoApartado');
    var inputEnganche = document.getElementById('montoDescEnganche');
    var inputTotalFinal = document.getElementById('totalFinal');
    var inputTotalFinanciar = document.getElementById('totalFinanciar');

        for(var i=0;i<click;i++){
            var enganche = document.querySelectorAll('#montoEng'+i);
            enganche.forEach(element => {
                if(element.value != ''){
                    sum += parseFloat(element.value);
                    band--;
                }          
            });
        }
        sum = parseFloat(sum) + parseFloat(apartado.value);        
        inputEnganche.value = sum.toFixed(2);
        if(inputTotalFinal.value != ''){
            
            $("#rowEnganche").show();
            console.log(sumaTotal,inputTotalFinal.value);
            sumaTotal = parseFloat(inputTotalFinal.value)-parseFloat(sum);
            //inputTotalFinanciar.value = parseFloat(sumaTotal).toFixed(2);
        }
//band... sirve para verificar cuantos rows quedan, de acuerdo a los clicks dados
        if(band==0){
            inputTotalFinal.value = sumaTotal.toFixed(2);
            inputTotalFinanciar.value = sumaTotal.toFixed(2);
           // click=1;
        }
            
        console.log(sum, inputTotalFinal.value, sumaTotal, click,band);
        
}

function countAnualidad(){
    var sumA = 0;
    var bandA = clickA;
    var sumaTotalAnu = 0;
    var anu1 = document.getElementById('montoAnu');
    var inputAnualidad = document.getElementById('montoDescAnualidad');
    var inputTotalFinal = document.getElementById('totalFinal');

        for(var j=0;j<clickA;j++){
            var anualidad = document.querySelectorAll('#montoAnu'+j);
            anualidad.forEach(ele => {
                if(ele.value != ''){
                    sumA += parseFloat(ele.value);
                    bandA--;
                }          
            });
        }
        sumA = parseFloat(sumA) + parseFloat(anu1.value);        
        inputAnualidad.value = sumA.toFixed(2);
        if(inputTotalFinal.value != ''){
            $("#rowAnualidad").hide();
    
            sumaTotalAnu = parseFloat(inputTotalFinal.value)-parseFloat(sumA);
        }

        if(bandA==0){
            inputTotalFinal.value = sumaTotalAnu.toFixed(2);
        }
            
        console.log(sumA, inputTotalFinal.value, sumaTotalAnu, clickA,bandA);
        //console.log(sumaTotal);

}

function countSaldoC(){
    var sumSld = 0;
    var bandSld = clickSld;
    var sumTotalSldCon = 0;
    var Sld1 = document.getElementById('montoSldCon');
    var inputSaldoCon = document.getElementById('montoSldC');
    var inputTotalFinal = document.getElementById('totalFinal');

    for(var h=0;h<clickSld;h++){
        var SldCon = document.querySelectorAll('#montoSldCon'+h);
        SldCon.forEach(ele=>{
            console.log(ele.value);
            if(ele.value != ''){
                sumSld += parseFloat(ele.value);
                bandSld --;
            }
        })
    }
    sumSld = parseFloat(sumSld) + parseFloat(Sld1.value);
    inputSaldoCon.value = sumSld.toFixed(2);
    
    if(inputTotalFinal.value != ''){
        $("#rowSldC").hide();
        sumTotalSldCon = parseFloat(inputTotalFinal.value)-parseFloat(sumSld);
    }

    if(bandSld==0){
        inputTotalFinal.value = sumTotalSldCon.toFixed(2);
    }
    console.log(Sld1.value,inputSaldoCon.value,inputTotalFinal.value, sumSld, clickSld);
}

function leyenda(){
    var leyenda = document.getElementById('leyenda');
    leyenda.style.display='block';

    //cliente, lote,tipo, desarrollo, id, si tiene privada o no, valor, superficie, costo_final mt2, apartado, enganche, 
    //parcialidades enganche , monto total financiar, parcialidades_total_financiar
    //

}

function saveCotizacion(){
    console.log("Save");
}

function mailCotizacion(){
    console.log("mail");
}

function buscaImg(id){
   var d = document.getElementById('imagen');
    $.ajax({
        url:"Cotizador/getImgDes?id="+id,
        type:"POST",
        dataType:"json",
        success:function(res2){
           
           d.setAttribute('src',"http://localhost/Codeigniter3"+res2[0]['ruta_img']);
           
        }
    });
}

function printCotizacion(){
    
    var arrayEng = [];
    var arrayAnualidad = [];
    var arraySldCon = [];
    var arrPagos = [];

    var cliente = document.getElementById('selCli');
    var lote = document.getElementById('loteSelect');
    var check1 = document.getElementById('checkbox1');
    var check2 = document.getElementById('checkbox2');
    var check3 = document.getElementById('checkbox3');
    var porcDesc = document.getElementById('porcDesc');
    var montoDesc = document.getElementById('montoDesc');
    var totalFinanciar = document.getElementById('totalFinanciar')
    var mesesFinanciar = document.getElementById('mesesFinanciar');
    var fecTotalFinanciar = document.getElementById('fechaTotalFinanciar');
    var superficie = document.getElementById('superficie');
    var precioMT2 = document.getElementById('precioMt2');
    var precioMtFinal = document.getElementById('precioMtFinal');
    var precioFinalLote = document.getElementById('precioFinal');
    var precioTotalFinal = document.getElementById('totalFinal');
    var usuario = document.getElementById('id_usr');

    var bandEng = click;
    var montoApartado = document.getElementById('montoApartado');
    var fecApartado = document.getElementById('fecApartado');

    var bandAnualidad = clickA;
    var montoAnualidad = document.getElementById('montoAnu');
    var fechaAnualidad = document.getElementById('fechaAnualidad');

    var bandSaldoC = clickSld;
    var montoSaCon = document.getElementById('montoSldCon');
    var fecSaCon = document.getElementById('datepickerSaldo');

    var div = document.querySelector('#imgHTML');
    var imgData;

    html2canvas($('#imgHTML'),{
        useCORS:true,
        onrendered:function(canvas){
            imgData = canvas.toDataURL('image/png');

    if(check2.checked && porcDesc.value != '' ){
        console.log(cliente.value,lote.value,porcDesc.value);
    }

    if(check3.checked && porcDesc.value != '' ){
        console.log(cliente.value,lote.value,montoDesc.value);
    }

    if(montoApartado.value != '' && fecApartado.value != ''){
        for(var i=1;i<bandEng;i++){
            var montoEng = document.getElementById('montoEng'+i);
            var fecEng = document.getElementById('fecEng'+i);
            
            arrayEng[i] = [montoEng.value,fecEng.value];
        }
    }

    if(montoAnualidad.value != '' && fechaAnualidad.value != ''){
        for(var j=1;j<bandAnualidad;j++){
            var montoA = document.getElementById('montoAnu'+j);
            var fecA = document.getElementById('fecAnu'+j);
            //console.log(montoA.value,fecA.value);
            arrayAnualidad[j] = [montoA.value,fecA.value];
        }
        console.log(montoAnualidad.value,fechaAnualidad.value);
        arrayAnualidad[0]=[montoAnualidad.value,fechaAnualidad.value];
    }

    if(montoSaCon.value != '' && fecSaCon.value != ''){
        for(var k=1;k<bandSaldoC;k++){
            var montoS = document.getElementById('montoSldCon'+k);
            var fecSaCon = document.getElementById('fecSld'+k);
            arraySldCon[k] = [montoS.value,fecSaCon.value];
        }
        arraySldCon[0]=[montoSaCon.value,fecSaCon.value];
    }
    //console.log(arrayEng[1][0]);die();
    arrPagos = {
                apartado:[montoApartado.value,fecApartado.value],
                enganche:[arrayEng],
                anualidad:[arrayAnualidad],
                saldoC:[arraySldCon]
                };
    //const jsonPagos = JSON.stringify(Object.assign({},arrPagos));
    var data = {
                cliente:cliente.value,
                lote:lote.value,
                porcentaje:porcDesc.value,
                monto:montoDesc.value,
                totalFinanciar:totalFinanciar.value,
                mesesFinanciar:mesesFinanciar.value,
                fechaIniFinanciar:fecTotalFinanciar.value,
                detalle:arrPagos
                };
    
    var arrFecha = fecTotalFinanciar.value.split('-');
    var meses = ['ENERO','FEBRERO','MARZO','ABRIL','MAYO','JUNIO','JULIO',
                'AGOSTO','SEPTIEMBRE','OCTUBRE','NOVIEMBRE','DICIEMBRE'];
    
    const timeT = Date.now();
    const fecha = new Date(timeT);  
    
    //var img64 = btoa("https://capiterra.com.mx/multimedia/Nikte/niktebancaria.jpeg");
//                      x  y
    //doc.text('Hello World!',0, 10);

    var doc = new jsPDF('p','pt','a4');
    doc.addImage(imgData,'JPG',450,10);
//    window.open(URL.createObjectURL(doc.output("blob")));
 
    doc.setFontType("normal");
    doc.setFontSize(12);
    doc.text(490,110,fecha.toLocaleDateString());

    doc.setFontType("bold");
    doc.setFontSize(10);
    doc.text(50,130,"CIERRE ");
    doc.text(50,150,"DESARROLLO / PRIVADA / LOTE: "+ $('#loteSelect :selected').text().trim());
    doc.text(48,170," TIPO LOTE: "+ $('#tipoLote').text().trim());

     doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(50,190,"CLIENTE: "+ $('#selCli :selected').text());

    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(350,190,"ASESOR: "+usuario.value);

/*     doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(25,79,"COORDINADOR: "); */
    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(50,220,"PRECIO DE VENTA: $" + precioFinalLote.value + " pesos mxn");
   
    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(50,240,"SUPERFICIE: " + superficie.value + " M2");
 
    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(50,260,"PRECIO POR MT2: $" + precioMT2.value + " pesos mxn");

    if(porcDesc.value != ''){
        doc.setFontType("normal");
        doc.setFontSize(10);
        doc.text(50,275,"- PROMOCIÓN " + porcDesc.value + " %: $"+precioMtFinal.value+" pesos mxn");
    }

    if(montoDesc.value != ''){
        doc.setFontType("normal");
        doc.setFontSize(10);
        doc.text(50,288,"- DESCUENTO : $" + montoDesc.value + " mxn Mt2 ");
    }

    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(50,305,"PRECIO PROMOCIÓN: $" + precioTotalFinal.value + " pesos mxn");
 
    var mensualidades = parseFloat(totalFinanciar.value) / parseFloat(mesesFinanciar.value);
    
    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(70,335,"APARTADO: " + fecApartado.value);

    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(200,335," $" + montoApartado.value + " pesos mxn");

    if(arrayEng.length > 0){
        var x = 210;
        var y = 350;

        for(var v=1;v<arrayEng.length;v++){    
            doc.setFontType("normal");
            doc.setFontSize(10);
            doc.text((x/3),y+(v*12),"ENGANCHE "+v+':  '+arrayEng[v][1]);
            
            doc.setFontType("normal");
            doc.setFontSize(10);
            doc.text(x,y+(v*12)," $ " + arrayEng[v][0] + " pesos mxn");    
        }
    }
/* 
    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(80,180, mesesFinanciar.value + " MENSUALIDADES DE $"+ parseFloat(mensualidades).toFixed(2)+" pesos MXN");

    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(75,190," EMPEZANDO LOS PRIMEROS CINCO DÍAS");

    doc.setFontType("normal");
    doc.setFontSize(10);
    doc.text(77,195,"NATURALES DEL MES DE " + meses[arrFecha[1]-1] +' '+arrFecha[0])
   
    doc.setFontType("normal");
    doc.setFontSize(12);
    doc.text(25,205,"DATOS PARA EL DEPÓSITO");

    doc.setFontType("normal");
    doc.setFontSize(8);
    doc.text(25,210,"NOTA: FAVOR DE INGRESAR EL NÚMERO DE REFERENCIA AL REALIZAR EL DEPÓSITO O TRANSFERENCIA");
 */
    //doc.output('dataurlnewwindow',{filename:'newpdf.pdf'});
    window.open(URL.createObjectURL(doc.output("blob")));
   
    //doc.save("ejemplo1.pdf");

    //console.log(data); 

   /*  $.ajax({
        url:"Cotizador/printPDF?datos="+JSON.stringify(data),
        type:"POST",;
        dataType:"json",
        beforeSend:function(){
            console.log(url);
        },
        success:function(respuesta){
            console.log('EXITO!',respuesta);
        }
    }); */

  /*   axios({
        method: 'get',
        url: 'Cotizador/printPDF',
        params:data
      }).then(resp => {
        console.log(resp.data);
      }); */

   /*  const XHR = new XMLHttpRequest();

    XHR.open("POST","Cotizador/printPDF");
    XHR.setRequestHeader("Content-Type","application/json");
    let datos = data;
    XHR.send(datos); */
        }
    })
    
}
 