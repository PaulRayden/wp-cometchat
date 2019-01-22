(function($) {

var show_friends;
var bp_group_sync;

jQuery(document).ready(function() {
    jQuery('#save').on('click', function(e) {
        console.log('clicked');
        show_friends = jQuery("input.show_friends[type=checkbox]:checked").val();
        if(show_friends == '' || show_friends == undefined){
            show_friends = "false";
        }else{
        	show_friends = "true";
        }

        bp_group_sync = jQuery("input.bp_group_sync[type=checkbox]:checked").val();
        if(bp_group_sync == '' || bp_group_sync == undefined){
            bp_group_sync = "false";
        }else{
            bp_group_sync = "true";
        }

        data = {
            'action': 'cc_action',
            'api': 'cometchat_friend_ajax',
            'show_friends': show_friends,
            'bp_group_sync': bp_group_sync
        }

        jQuery.post(ajaxurl, data, function(response){
    		jQuery("#success").html("<div class='updated'><p>Settings successfully saved!</p></div>");
    		jQuery(".updated").fadeOut(3000);
        });
    });
});