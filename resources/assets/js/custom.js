$(function() {

  $(".tabContent").hide(); 
  $("ul.tabs li:first").addClass("active").show(); 
  $(".tabContent:first").show(); 

  $("ul.tabs li").click(function () {
    $("ul.tabs li").removeClass("active"); 
    $(this).addClass("active"); 
    $(".tabContent").hide(); 
    var activeTab = $(this).find("a").attr("href"); 
    $(activeTab).fadeIn(); 
    return false;
  });

  $(".testimonialContent").hide(); 
  $(".testimonialTabs ol a:first").addClass("active").show(); 
  $(".testimonialContent:first").show(); 

  $(".testimonialTabs ol a").click(function () {
    $(".testimonialTabs ol a").removeClass("active"); 
    $(this).addClass("active"); 
    $(".testimonialContent").hide(); 
    var activeTab = $(this).attr("href");
    $(activeTab).fadeIn(1000);

    return false;
  });

  var currentTab = 1;
  window.setInterval(function(){
    if($('.testimonialTabs ol a:last-child').hasClass('active'))
      currentTab=1;
    else
      currentTab++;
    $('.testimonialTabs ol a:nth-child('+currentTab+')').trigger('click');
  }, 4000);

  var deleter = {
    elementSelector       : ".the-tables",
    classSelector         : ".delete-this",
    modalTitle            : "Are you sure?",
    modalMessage          : "You will not be able to recover this entry?",
    modalConfirmButtonText: "Yes, delete it!",
    laravelToken          : null,
    url                   : "/",

    init: function() {
      $(this.elementSelector).on('click', this.classSelector, {self:this}, this.handleClick);
    },

    handleClick: function(event) {
      event.preventDefault();

      var self = event.data.self;
      var link = $(this);

      self.modalTitle             = link.data('title') || self.modalTitle;
      self.modalMessage           = link.data('message') || self.modalMessage;
      self.modalConfirmButtonText = link.data('button-text') || self.modalConfirmButtonText;
      self.url                    = link.attr('href');
      self.laravelToken           = $("meta[name=token]").attr('content');

      self.confirmDelete();
    },

    confirmDelete: function() {
      swal({
        title             : this.modalTitle,
        text              : this.modalMessage,
        type              : "warning",
        showCancelButton  : true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText : this.modalConfirmButtonText,
        closeOnConfirm    : true
      },
      function() {
        this.makeDeleteRequest()
      }.bind(this)
      );
    },

    makeDeleteRequest: function() {
      var form =
        $('<form>', {
          'method': 'POST',
          'action': this.url
        });

      var token =
        $('<input>', {
          'type': 'hidden',
          'name': '_token',
          'value': this.laravelToken
        });

      var hiddenInput =
        $('<input>', {
          'name': '_method',
          'type': 'hidden',
          'value': 'DELETE'
        });

      return form.append(token, hiddenInput).appendTo('body').submit();
    }
  };
  deleter.init();

  var verified = {
    elementSelector       : ".the-tables",
    classSelector         : ".verified-this",
    modalTitle            : "Are you sure?",
    modalMessage          : "User status in this competition will be verified.",
    modalConfirmButtonText: "Yes, verified it!",
    laravelToken          : null,
    url                   : "/",

    init: function() {
      $(this.elementSelector).on('click', this.classSelector, {self:this}, this.handleClick);
    },

    handleClick: function(event) {
      event.preventDefault();

      var self = event.data.self;
      var link = $(this);

      self.modalTitle             = link.data('title') || self.modalTitle;
      self.modalMessage           = link.data('message') || self.modalMessage;
      self.modalConfirmButtonText = link.data('button-text') || self.modalConfirmButtonText;
      self.url                    = link.attr('href');
      self.laravelToken           = $("meta[name=token]").attr('content');

      self.confirmVerified();
    },

    confirmVerified: function() {
      swal({
        title             : this.modalTitle,
        text              : this.modalMessage,
        type              : "warning",
        showCancelButton  : true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText : this.modalConfirmButtonText,
        closeOnConfirm    : true
      },
      function() {
        this.makeVerifiedRequest()
      }.bind(this)
      );
    },

    makeVerifiedRequest: function() {
      var form =
        $('<form>', {
          'method': 'POST',
          'action': this.url
        });

      var token =
        $('<input>', {
          'type': 'hidden',
          'name': '_token',
          'value': this.laravelToken
        });

      var hiddenInput =
        $('<input>', {
          'name': '_method',
          'type': 'hidden',
          'value': 'PUT'
        });

      return form.append(token, hiddenInput).appendTo('body').submit();
    }
  };
  verified.init();

  var winWidth = jQuery(document.body).width();
  var winHeight = jQuery(document.body).height();

  $('#galleries').change(function(e){
    $('.galleries_prev').fadeIn("fast").attr('src', URL.createObjectURL(e.target.files[0]));
    $('.galleries_name').val(e.target.files[0].name);
  });

  $('#pembayaran').change(function(e){
    $('.pem_file_prev').fadeIn("fast").attr('src', URL.createObjectURL(e.target.files[0]));
    $('.pem_file_name').val(e.target.files[0].name);
  });

  $('#surat_pernyataan').change(function(e){
    $('.surper_file_prev').fadeIn("fast").attr('src', URL.createObjectURL(e.target.files[0]));
    $('.surper_file_name').val(e.target.files[0].name);
  });

  var tmpEWidth = -1;
  $(".showImage").on("click", function(e) {
    var dtNote = $(e.target).data('note');
    var dtCreated = $(e.target).data('created');
    var eWidth = $(e.target).data('width');
    tmpEWidth = eWidth;
    var w = eWidth == 1 ? winWidth/4 : winWidth/5;
    $('#imagepreview').attr('src', $(e.target).attr('src')).attr('width', w).attr('data-width', eWidth); 
    if (dtNote != "") {
      $('#imagenote').html("Catatan : " + dtNote);
    } else {
      $('#imagenote').html("");
    }
    $('#imagecreated').html("Waktu upload : " + dtCreated);
    $('#imagemodal').modal('show');
  });

  jQuery(window).resize(function () {
    winWidth = jQuery(document.body).width();
    winHeight = jQuery(document.body).height();

    // ShowImageClick
    var el = '#imagepreview';
    var w = tmpEWidth == 1 ? winWidth/4 : winWidth/5;
    $(el).attr('width', w);
  }).resize();

});
