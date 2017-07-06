function insertTab(evt, obj)
{
    evt = evt || window.event;
    var keyCode = evt.keyCode || evt.which || 0;

    if(keyCode == 9)
    {
        if(document.selection)
        {
            document.selection.createRange().duplicate().text = "\t";
        }
        else if(obj.setSelectionRange)
        {
            var strFirst = obj.value.substr(0, obj.selectionStart);
            var strLast  = obj.value.substr(obj.selectionEnd, obj.value.length);

            obj.value = strFirst + "\t" + strLast;

            var cursor = strFirst.length + "\t".length;

            obj.selectionStart = obj.selectionEnd = cursor;
        }

        if(evt.preventDefault && evt.stopPropagation)
        {
            evt.preventDefault();
            evt.stopPropagation();
        }
        else {
            evt.returnValue = false;
            evt.cancelBubble = true;
        }

        return false;
    }
}