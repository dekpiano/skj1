<script>
     var editor = new FroalaEditor('.selector', {
        imageUploadParam: 'image_param',
        imageUploadMethod: 'post',
        height: 300,
        imageUploadURL: '<?= base_url('admin/control_admin_news/news_uploads'); ?>',
        imageUploadParams: {
            froala: 'true',
            _token: "csrf_token()"
        },
        events: {
            'image.removed': function($img) {
                $.ajax({
                        // Request method.
                        method: 'POST',

                        // Request URL.
                        url: '<?= base_url('admin/control_admin_news/news_uploads_delete'); ?>',

                        // Request params.
                        data: {
                            src: $img.attr('src')
                        }
                    })
                    .done(function(data) {
                        console.log('delete');
                    })
                    .fail(function(err) {
                        console.log('Image delete problem: ' + JSON.stringify(err));
                    })

            }
        },
        events: {
            'image.beforeRemove': function($img) {
                $.ajax({
                        // Request method.
                        method: 'POST',

                        // Request URL.
                        url: '<?= base_url('admin/control_admin_news/news_uploads_delete'); ?>',

                        // Request params.
                        data: {
                            src: $img.attr('src')
                        }
                    })
                    .done(function(data) {
                        console.log(data);
                    })
                    .fail(function(err) {
                        console.log('Image delete problem: ' + JSON.stringify(err));
                    })

            }
        }
    });

</script>