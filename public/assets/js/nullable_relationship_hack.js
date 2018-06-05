var nullable_relations = [
    'parent_id',
];

nullable_relations.forEach(function (relation_key) {
    var select_item = jQuery('[name='+relation_key+']');
    // Add the "None" option
    select_item.prepend(
        jQuery("<option></option>")
            .attr('value','')
            .text('None')
    );

    // Select it when editing an item that has a null relation
    if (jQuery('[name='+relation_key+'] option:selected').attr('selected') === undefined) {
        select_item.val('').change();
    }
});