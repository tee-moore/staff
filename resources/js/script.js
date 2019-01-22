$.fn.extend({
    treed: function (o) {
        let openedClass = 'opened';
        let closedClass = 'closed';

        if (typeof o != 'undefined'){
            if (typeof o.openedClass != 'undefined'){
                openedClass = o.openedClass;
            }

            if (typeof o.closedClass != 'undefined'){
                closedClass = o.closedClass;
            }
        };

        let tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function () {
            let branch = $(this);
            branch.prepend("");
            branch.addClass('branch');
            branch.children().children().toggle();
        });

        tree.find('.worker').each(function () {
            let worker = $(this);
            worker.on('click', function (e) {
                if (this == e.currentTarget) {
                    e.stopPropagation()
                    $(this).closest('li').toggleClass(openedClass + " " + closedClass);
                    $(this).closest('li').children().children().toggle();
                }
            })
        });
    }
});

/* Initialization of treeviews */
$('#workers').treed();