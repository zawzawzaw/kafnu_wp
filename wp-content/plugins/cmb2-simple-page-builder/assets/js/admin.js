var sortSelect = function (select, attr, order) {
    if(attr === 'text'){
        if(order === 'asc'){
        		var val = jQuery(select).val();
            jQuery(select).html(jQuery(select).children('option').sort(function (x, y) {
                return jQuery(x).text().toUpperCase() < jQuery(y).text().toUpperCase() ? -1 : 1;
            }));
            // jQuery(select).get(0).selectedIndex = 0;
            jQuery(select).val(val);
        }// end asc
        if(order === 'desc'){
        	var val = jQuery(select).val();
            jQuery(select).html(jQuery(select).children('option').sort(function (y, x) {
                return jQuery(x).text().toUpperCase() < jQuery(y).text().toUpperCase() ? -1 : 1;
            }));
            jQuery(select).val(val);
            // jQuery(select).get(0).selectedIndex = 0;
            
        }// end desc
    }
};

var selected = jQuery('#parts_saved_layouts_repeat .cmb-td option[selected="selected"]');
selected.each(function(index){
	if ( 'none' == jQuery(this).val() ) {
		jQuery(this).parent().parent().parent().hide();
		jQuery('button.cmb-add-row-button').click(function(){
			jQuery('.empty-row.hidden').show();

		});
	}
});

jQuery("select.wds-simple-page-builder-template-select").change(function () {
	var $this = jQuery(this);
	var title = $this.closest( '.cmb-row.cmb-repeatable-grouping' );  
	var new_title = $this.find( 'option:selected').text();

	title.find( '.cmb-group-title').html( new_title );
});

jQuery(document).ready(function($){

	// custom sort
	jQuery("select.wds-simple-page-builder-template-select").each(function(index, value){
		var id = '#' + jQuery(this).attr('id');
		// sortSelect('#ddlList', 'text', 'asc');
		sortSelect(id, 'text', 'asc');
	});

	// Get all the template select boxes
	 jQuery("select.wds-simple-page-builder-template-select :selected").each(function( k, v ) {
		var title = jQuery( this ).closest( '.cmb-row.cmb-repeatable-grouping' );
		var new_title = jQuery( this ).text();
	
		title.find( '.cmb-group-title').html( new_title );
	 });
});
