$(document).ready(function() {

    $('#quote_export').click(function() {
        open($('select[name=lclRates-list_length]'));
        $("select[name=lclRates-list_length]").val('-1').trigger('change');
        //$('select>option:eq(3)').attr('selected', 'selected').trigger('change');
        open($('select[name=lclRates-list_length]'));

        var qtdTarifasSelecionadas = 0;

        for (var i = 0; i <= document.getElementById('numTarifas').value; i++) {
            var idElement = 'tar_'+i;
            if ($('#tar_'+i).is(':checked')) {
               qtdTarifasSelecionadas += 1;
            }
        }

        if(qtdTarifasSelecionadas == 0){
            $('#printQuote').modal({
              show: 'true'
            });
        }
        else{
           document.getElementById('frmQuote').action = '/get-lcl-quote';
           document.getElementById('frmQuote').submit();
        }
    });

});

$(document).ready(function() {

    $('#quote_excel').click(function() {
        open($('select[name=lclRates-list_length]'));
        $("select[name=lclRates-list_length]").val('-1').trigger('change');
        //$('select>option:eq(3)').attr('selected', 'selected').trigger('change');
        open($('select[name=lclRates-list_length]'));

        var qtdTarifasSelecionadas = 0;

        for (var i = 0; i <= document.getElementById('numTarifas').value; i++) {
            var idElement = 'tar_'+i;
            if ($('#tar_'+i).is(':checked')) {
               qtdTarifasSelecionadas += 1;
            }
        }

        if(qtdTarifasSelecionadas == 0){
            $('#excelQuote').modal({
              show: 'true'
            });
        }
        else{
           document.getElementById('frmQuote').action = '/get-lcl-excel';
           document.getElementById('frmQuote').submit();
        }


    });

});


function open(elem) {
    if (document.createEvent) {
        var e = document.createEvent("MouseEvents");
        e.initMouseEvent("mousedown", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
        elem[0].dispatchEvent(e);
    } else if (element.fireEvent) {
        elem[0].fireEvent("onmousedown");
    }
}
