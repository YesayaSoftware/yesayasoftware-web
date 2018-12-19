<script>
    import Comments from '../components/Comments.vue';

    export default {
        props: ['post'],

        components: {Comments},

        data () {
            return {
                commentsCount: this.post.comment_count,
                title: this.post.title,
                body: this.post.body,
                form: {},
                editing: false
            };
        },

        created () {
            this.resetForm();
        },

        methods: {
            update () {
                let uri = `/posts/${this.post.category.slug}/${this.post.slug}`;

                axios.patch(uri, this.form).then(() => {
                    this.editing = false;
                    this.title = this.form.title;
                    this.body = this.form.body;
                    this.category_id = this.form.category_id;

                    flash('Your post has been updated.');
                })
            },

            resetForm () {
                this.form = {
                    title: this.post.title,
                    body: this.post.body
                };

                this.editing = false;
            }
        }
    }
</script>
