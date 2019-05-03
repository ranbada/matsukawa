class Common {
  constructor() {
    this._init();
  }
  _init() {
    $(function() {
      $('.navToggle').click(function() {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
          $('.globalMenuSp').addClass('active');
        } else {
          $('.globalMenuSp').removeClass('active');
        }
      });
    });
  }
}

export default Common;
