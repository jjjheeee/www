EditorJSLoader.ready(function(Editor) {

	TrexMessage.addMsg({
        '@fontfamily.nanumgothic': '나눔 고딕',
		'@fontfamily.notosanskr': 'Noto Sans KR'
    });

	var config = {
		txHost: '',
		txPath: '/webeditor/',
		txService: 'sample',
		txProject: 'sample',
		initializedId: "",
		wrapper: "tx_trex_container",
		form: 'tx_editor_form'+"",
		txIconPath: "/webeditor/images/icon/editor/",
		txDecoPath: "/webeditor/images/deco/contents/",
		canvas: {
			styles: {
				color: "#333333", /* 기본 글자색 */
				fontFamily: "Noto Sans KR", /* 기본 글자체 */
				fontSize: "10pt", /* 기본 글자크기 */
				backgroundColor: "#fff", /*기본 배경색 */
				padding: "8px" /* 위지윅 영역의 여백 */
			},
			showGuideArea: true
		},
		events: {
			preventUnload: false
		},
		sidebar: {
			attachbox: {
				show: true,
				confirmForDeleteAll: true
			}
		},
		toolbar: {
            fontfamily: {
               options : [
                    { label: TXMSG('@fontfamily.gulim')+' (<span class="tx-txt">가나다라</span>)', title: TXMSG('@fontfamily.gulim'), data: 'Gulim,굴림,AppleGothic,sans-serif', klass: 'tx-gulim' },
                    { label: TXMSG('@fontfamily.batang')+' (<span class="tx-txt">가나다라</span>)', title: TXMSG('@fontfamily.batang'), data: 'Batang,바탕,serif', klass: 'tx-batang' },
                    { label: TXMSG('@fontfamily.dotum')+' (<span class="tx-txt">가나다라</span>)', title: TXMSG('@fontfamily.dotum'), data: 'Dotum,돋움,sans-serif', klass: 'tx-dotum' },
                    { label: TXMSG('@fontfamily.gungsuh')+' (<span class="tx-txt">가나다라</span>)', title: TXMSG('@fontfamily.gungsuh'), data: 'Gungsuh,궁서,serif', klass: 'tx-gungseo' },
				    { label: TXMSG('@fontfamily.nanumgothic')+' (<span class="tx-txt">가나다라</span>)', title: TXMSG('@fontfamily.nanumgothic'), data: 'Nanum Gothic,나눔고딕', klass: 'tx-nanumgothic' },
				    { label: TXMSG('@fontfamily.notosanskr')+' (<span class="tx-txt">가나다라</span>)', title: TXMSG('@fontfamily.notosanskr'), data: 'Noto Sans KR', klass: 'tx-notosanskr' },
                    { label: 'Arial (<span class="tx-txt">abcde</span>)', title: 'Arial', data: 'Arial,sans-serif', klass: 'tx-arial' },
                    { label: 'Verdana (<span class="tx-txt">abcde</span>)', title: 'Verdana', data: 'Verdana,sans-serif', klass: 'tx-verdana' },
                    { label: 'Courier New (<span class="tx-txt">abcde</span>)', title: 'Courier New', data: 'Courier New,monspace', klass: 'tx-courier-new' }
                ]
            },
			image: {
				disabledonmobile: false
			},
			file: {
				disabledonmobile: false
			}
        }
	};

	var editor = new Editor(config);
});

function setForm(editor) {

        var i, input;
        var form = editor.getForm();
        var content = editor.getContent();

        var textarea = document.createElement('textarea');
        textarea.name = 'content';
        textarea.style.display = 'none';
        textarea.value = content;
        form.createField(textarea);

        var images = editor.getAttachments('image');
        for (i = 0; i < images.length; i++) {
            if (images[i].existStage) {
                
				//alert('attachment information - image[' + i + '] \r\n' + JSON.stringify(images[i].data));
                
				//파일경로
				input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'attach_image[]';
                input.value = images[i].data.imageurl;
                form.createField(input);

				//파일명
				input2 = document.createElement('input');
                input2.type = 'hidden';
                input2.name = 'file_name[]';
                input2.value = images[i].data.filename;
                form.createField(input2);

            }
        }

        var files = editor.getAttachments('file');
        for (i = 0; i < files.length; i++) {
            input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'attach_file[]';
            input.value = files[i].data.attachurl;
            form.createField(input);
        }
		return true;
}