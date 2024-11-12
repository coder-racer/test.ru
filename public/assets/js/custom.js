function tinymce_init_callback(editor) {

    editor.remove();
    editor = null;

    tinymce.init(voyagerTinyMCE.getConfig(
        {
            "init_instance_callback" : null,
            toolbar: "styleselect bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code"
        }));
    console.log("fdff")
//
//     // tinymce.init({
//     //     menubar: false,
//     //     selector: "textarea.richTextBox",
//     //     skin_url: $('meta[name="assets-path"]').attr("content") + "?path=js/skins/voyager",
//     //     min_height: 100,
//     //     height: 200,
//     //     resize: "vertical",
//     //     plugins: "link, image, code, table, textcolor, lists",
//     //     extended_valid_elements: "input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]",
//     //     file_browser_callback: function (field_name, url, type, win) {
//     //         if (type == "image") {
//     //             $("#upload_file").trigger("click");
//     //         }
//     //     },
//     //     toolbar: "styleselect bold italic underline strikethrough | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code",
//     //     convert_urls: false,
//     //     image_caption: true,
//     //     image_title: true,
//     //     "tinymceOptions": {
//     //         "height": 200,
//     //         "min_height": 200
//     //     }
//     // });
}
