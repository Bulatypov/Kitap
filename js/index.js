(function(){
  var $content = $('.modal_info').detach();

  $('.open_button').on('click', function(e){
    modal.open({
      content: $content,
      width: 540,
      height: 270,
    });
    $content.addClass('modal_content');
    $('.modal, .modal_overlay').addClass('display');
    $('.open_button').addClass('load');
  });
}());

var modal = (function(){

  var $close = $('<button role="button" class="modal_close" title="Close"><span></span></button>');
  var $content = $('<div class="modal_content"/>');
  var $modal = $('<div class="modal"/>');
  var $window = $(window);

  $modal.append($content, $close);

  $close.on('click', function(e){
    $('.modal, .modal_overlay').addClass('conceal');
    $('.modal, .modal_overlay').removeClass('display');
    $('.open_button').removeClass('load');
    e.preventDefault();
    modal.close();
  });

  return {
    center: function(){
      var top = Math.max($window.height() - $modal.outerHeight(), 0) / 2;
      var left = Math.max($window.width() - $modal.outerWidth(), 0) / 2;
      $modal.css({
        top: top + $window.scrollTop(),
        left: left + $window.scrollLeft(),
      });
    },
    open: function(settings){
      $content.empty().append(settings.content);

      $modal.css({
        width: settings.width || 'auto',
        height: settings.height || 'auto'
      }).appendTo('body');

      modal.center();
      $(window).on('resize', modal.center);
    },
    close: function(){
      $content.empty();
      $modal.detach();
      $(window).off('resize', modal.center);
    }
  };
}());














$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});









$(document).ready(function(){
	var dropZone = $('#upload-container');

	$('#file-input').focus(function() {
		$('label').addClass('focus');
	})
	.focusout(function() {
		$('label').removeClass('focus');
	});


	dropZone.on('drag dragstart dragend dragover dragenter dragleave drop', function(){
		return false;
	});

	dropZone.on('dragover dragenter', function() {
		dropZone.addClass('dragover');
	});

	dropZone.on('dragleave', function(e) {
		let dx = e.pageX - dropZone.offset().left;
		let dy = e.pageY - dropZone.offset().top;
		if ((dx < 0) || (dx > dropZone.width()) || (dy < 0) || (dy > dropZone.height())) {
			dropZone.removeClass('dragover');
		}
	});

	dropZone.on('drop', function(e) {
		dropZone.removeClass('dragover');
		let files = e.originalEvent.dataTransfer.files;
		sendFiles(files);
	});

	$('#file-input').change(function() {
		let files = this.files;
		sendFiles(files);
	});


	function sendFiles(files) {
		let maxFileSize = 5242880;
		let Data = new FormData();
		$(files).each(function(index, file) {
			if ((file.size <= maxFileSize) && ((file.type == 'image/png') || (file.type == 'image/jpeg'))) {
				Data.append('images[]', file);
			}
		});

		$.ajax({
			url: dropZone.attr('action'),
			type: dropZone.attr('method'),
			data: Data,
			contentType: false,
			processData: false,
			success: function(data) {
				alert ('Файлы были успешно загружены!');
			}
		});
	}
})








$(document).ready(function(){
	var dropZone = $('#upload-container1');

	$('#file-input1').focus(function() {
		$('label').addClass('focus');
	})
	.focusout(function() {
		$('label').removeClass('focus');
	});


	dropZone.on('drag dragstart dragend dragover dragenter dragleave drop', function(){
		return false;
	});

	dropZone.on('dragover dragenter', function() {
		dropZone.addClass('dragover');
	});

	dropZone.on('dragleave', function(e) {
		let dx = e.pageX - dropZone.offset().left;
		let dy = e.pageY - dropZone.offset().top;
		if ((dx < 0) || (dx > dropZone.width()) || (dy < 0) || (dy > dropZone.height())) {
			dropZone.removeClass('dragover');
		}
	});

	dropZone.on('drop', function(e) {
		dropZone.removeClass('dragover');
		let files = e.originalEvent.dataTransfer.files;
		sendFiles(files);
	});

	$('#file-input1').change(function() {
		let files = this.files;
		sendFiles(files);
	});


	function sendFiles(files) {
		let maxFileSize = 5242880;
		let Data = new FormData();
		$(files).each(function(index, file) {
			if ((file.size <= maxFileSize) && ((file.type == 'image/png') || (file.type == 'image/jpeg'))) {
				Data.append('images[]', file);
			}
		});

		$.ajax({
			url: dropZone.attr('action'),
			type: dropZone.attr('method'),
			data: Data,
			contentType: false,
			processData: false,
			success: function(data) {
				alert ('Файлы были успешно загружены!');
			}
		});
	}
})