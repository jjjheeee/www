<!-- 에디터 스크립트 -->
<link rel="stylesheet" href="/webeditor/css/editor.css" type="text/css" charset="utf-8"/>
<script src="/webeditor/js/editor_loader.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
<!--
Trex.module("notify removed attachments", function (editor, toolbar, sidebar, canvas, config) {
	editor.getAttachBox().observeJob(Trex.Ev.__ENTRYBOX_ENTRY_REMOVED, function (entry) {
		var delete_file = entry.data.imageurl;
		$.get("/webeditor/deletefile.php?delete_file=" + delete_file);
	});
});
//-->
</script>