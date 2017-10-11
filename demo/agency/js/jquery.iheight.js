(function($) {
    $.fn.iheight2 = function($apply) {
        var $this = $(this),
            mh = 0;
        if (typeof something === "undefined") $apply = $this;
        $this.each(function() {
            var rec_h = parseInt($(this).height());
            if (rec_h > mh) {
                mh = rec_h - 50;
            };
        });
        $apply.height(mh);
    };
})(jQuery);

(function($) {
    $.fn.iheight = function($apply) {
        var $this = $(this),
            mh = 0;
        if (typeof something === "undefined") $apply = $this;
        $this.each(function() {
            var rec_h = parseInt($(this).height());
            if (rec_h > mh) {
                mh = rec_h;
            };
        });
        $apply.height(mh);
    };
})(jQuery);
