function initializePopup() {
	$('#popup').hide();
	
	$('a.popup').click(function(event) {
		$('#popup').show().load(this.href + ' #body > *', function() {
			$('#popup .close').click(function(event) {
				$('#popup').hide();
				event.preventDefault();
			});
		});
		event.preventDefault();
	});
}

function initializeExternalLinks() {
	$('a').filter(function() {
		return this.hostname && this.hostname !== location.hostname;
	}).addClass('external');
	
	$('a.external').click(function(event) {
		open(this.href);
		event.preventDefault();
	});
}

function initializeExpandableElements() {
	$('.expandable').hide();
	
	$('.expand, .collapse').click(function(event) {
		$(this).parent().toggleClass('expanded');
		$(this).toggleClass('expand').toggleClass('collapse');
		$(this).siblings('.expandable').slideToggle(100);
		event.preventDefault();
	});
}

function initializeItemDistribution() {
    $('.distributable-items .item').each(function(i, item) {
        var parent = $('#' + $(item).attr('title') + ' .items');
        if (parent) {
            $(item).appendTo(parent);
        }
    });
}

function initializeDraggableItems() {
    $('.items').sortable({
        connectWith: '.items'
    });
}

function initializeItemCreation() {
	$('.items').dblclick(function(event) {
		var items = $(this);
		var status = items.find('.item:first').attr('title');
		var action = items.parents('form:first').attr('action');
		var list = items.clone().load(action + ' .item', function() {
			var item = $(list).find('.item:first');
			var parent = item.find('[name="status"]').parent();
			parent.prev().remove();
			parent.remove();
			item.find('form').append('<input type="hidden" name="status" value="' + status + '"/>');
			item.appendTo(items);
		});
		event.preventDefault();
	});
}

$(document).ready(function() {	
	initializePopup();
	initializeExternalLinks();
	initializeExpandableElements();
    initializeItemDistribution();
    initializeDraggableItems();
    initializeItemCreation();
});