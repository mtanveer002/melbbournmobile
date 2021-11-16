$(function() {
        var scntDiv = $('#f_volumes');
        //var i = $('#f_volumes div').size();
        var i = $('#f_volumes .row').size();

        $('#addScnt').live('click', function() {
          i++;
          $('<div class="row" id="row_'+i+'"><div class="col-md-1"><div class="form-group"><input type="text" id="Quantity_' + i +'" class="form-control" placeholder="Enter quantity" name="Quantity_' + i +'"></div></div><div class="col-md-1"><div class="form-group"><input type="text" id="Height_' + i +'" class="form-control" placeholder="cm" name="Height_' + i +'"></div></div><div class="col-md-1"><div class="form-group"><input type="text" id="Length_' + i +'" class="form-control" placeholder="cm" name="Length_' + i +'"></div></div><div class="col-md-1"><div class="form-group"><input type="text" id="Width_' + i +'" class="form-control" placeholder="cm" name="Width_' + i +'"></div></div><div class="col-md-1"><div class="form-group"><a href="#" id="remove" class="btn red"><i class="fa fa-trash-o"></i></a></div></div></div>').appendTo(scntDiv);
          $('#qtyVolumes').val(i);
          return false;
        });

        $('#remove').live('click', function() {
          $('#row_'+i).remove();
          i--;
          $('#qtyVolumes').val(i);
          return false;
       });

});
