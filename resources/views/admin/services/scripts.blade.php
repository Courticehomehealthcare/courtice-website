<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('ServicesText');

    // Auto-slug from title
    document.getElementById('titleInput').addEventListener('input', function () {
        let slug = this.value
            .toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/(^-|-$)/g, '');

        document.getElementById('slugInput').value = slug;
    });
</script>
