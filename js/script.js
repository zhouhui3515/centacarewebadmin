var groupID = 1;


$(document).ready(function () {
    filter();
    $("div #group1").hide();
    $("#add img").click(addgroup);
    $("#save").click(function () {
        var schedule_data = getPageSelected();
        console.log(getPageSelected());
    });

});

function addgroup() {
    var newGroup = '<div class= group id="group_'+groupID+'">' +
        '<div id="trash" class="ui-widget-content ui-state-default">' +
        '<h4 class="ui-widget-header">Group ' + groupID + '</h4>' +
        '</div><div class="scheduleinput">' +
        '<p><input type="text" id="act_name" name="act_name" placeholder="Activity name"></p>' +
        '<p><input type="text" id="date" name="date" placeholder="Date: YYYY-MM-DD"></p>' +
        '<p><input type="text" id="time" name="time" placeholder="Time: 00:00"></p>' +
        '<p><input type="text" id="loc" name="loc" placeholder="Location"></p>' +
        '</div></div>'
    $("#addingarea").prepend(newGroup);
    $("#add").css({ "width": "180px", "height": "640px"});
    $("#add img").css({ "margin-top": "150%", "margin-left":"30%"});
    droppable();
    $("#add").remove();

}

function getGalleryItems() {
    var curItems = $("#gallery li");

}

function checkNum(on){
    var pageItemList = [];
    var groupItems = getSelected(on.attr('id'));
    if (groupItems["members"].length == 5) {
        $(on).find("#trash").droppable({
            disabled: true
        });
    } else {
        $(on).find("#trash").droppable({
            disabled: false
        });
    }
}



function filter() {
    $('#multi-select').dropdown();
    var a = $('#multi-select').dropdown('get text');
}
/*
    return [selected_items];
    Get the selected items of a group.
*/
function getSelected(groupID) {
    var groupMembers = $("div#" + groupID + " ul li");
    var groupInfo = {};
    var memberList = [];
    for (var i = 0; i < groupMembers.length; i++) {
        var member = groupMembers.eq(i).find("div p:first-child").text();
        memberList.push(member);
    }
    groupInfo["time_range"] = $("#time").val();
    groupInfo["act_name"] = $("#act_name").val();
    groupInfo["location"] = $("#loc").val();
    groupInfo["stuff"] = $("#stuff").val();
    groupInfo["members"] = memberList;
    return groupInfo;
}

/*
    return [[selected items]];
    Get selected items of all the groups on a page.
*/
function getPageSelected() {
    var groups = $("div #addingarea");
    var pageItemList = {};
    $.each(groups.children(), function () {
        var groupItems = getSelected(this.id);
        pageItemList[this.id]=groupItems;
    });
    return pageItemList;
}
function droppable() {
    // there's the gallery and the trash
    var $gallery = $("#gallery"),
      $trash = $("#trash");

    // let the gallery items be draggable
    $("li", $gallery).draggable({
        cancel: "a.ui-icon", // clicking an icon won't initiate dragging
        revert: "invalid", // when not dropped, the item will revert back to its initial position
        containment: "document",
        helper: "clone",
        cursor: "move"

    });

    // let the trash be droppable, accepting the gallery items
    $trash.droppable({
        accept: "#gallery > li",
        activeClass: "ui-state-highlight",
        drop: function (event, ui) {
            deleteImage(ui.draggable);
            var a = $(this).parent();
            checkNum($(this).parent());
        },
        out: function (event, ui) { //not working
            checkNum($(this).parent());
        }
    });
    // let the gallery be droppable as well, accepting items from the trash
    $gallery.droppable({
        accept: "#trash li",
        activeClass: "custom-state-active",
        drop: function (event, ui) {
            recycleImage(ui.draggable)
        }
    });

    // image deletion function
    var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Delete this member' class='ui-icon ui-icon-refresh'>Recycle image</a>";
    function deleteImage($item) {
        $item.fadeOut(function () {
            var $list = $("ul", $trash).length ?
              $("ul", $trash) :
              $("<ul class='gallery ui-helper-reset'/>").appendTo($trash);

            $item.find("a.ui-icon-trash").remove();
            $item.append(recycle_icon).appendTo($list).fadeIn(function () {
                $item
                  .find("img");
            });
        });
    }

    // image recycle function
    function recycleImage($item) {
        $item.fadeOut(function () {
            $item
              .find("a.ui-icon-refresh")
                .remove()
              .end()
              .find("img")
              .end()
              .appendTo($gallery)
              .fadeIn();
        });
    }

    // image preview function, demonstrating the ui.dialog used as a modal window
    function viewLargerImage($link) {
        var src = $link.attr("href"),
          title = $link.siblings("img").attr("alt"),
          $modal = $("img[src$='" + src + "']");

        if ($modal.length) {
            $modal.dialog("open");
        } else {
            var img = $("<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />")
              .attr("src", src).appendTo("body");
            setTimeout(function () {
                img.dialog({
                    title: title,
                    width: 400,
                    modal: true
                });
            }, 1);
        }
    }

    // resolve the icons behavior with event delegation
    $("ul.gallery > li").click(function (event) {
        var $item = $(this),
          $target = $(event.target);

        if ($target.is("a.ui-icon-trash")) {
            deleteImage($item);
        } else if ($target.is("a.ui-icon-zoomin")) {
            viewLargerImage($target);
        } else if ($target.is("a.ui-icon-refresh")) {
            recycleImage($item);
        }

        return false;
    });
}