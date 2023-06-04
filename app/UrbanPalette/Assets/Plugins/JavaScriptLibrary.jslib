mergeInto(LibraryManager.library, {
  JavaScriptAlert: function (str) {
    window.alert(UTF8ToString(str));
    var str2='hello';
    var bufferSize = lengthBytesUTF8(str2) + 1;
    var buffer = _malloc(bufferSize);
    stringToUTF8(str2, buffer, bufferSize);
    return buffer;
  },
});