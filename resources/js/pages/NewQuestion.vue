<script>
    export default {
        props: ['user'],

        data () {
            return {
                form: {},
                questions: [],
                categories: [],
                open_form: false,
                answer: {}
            };
        },

        created () {
            this.resetForm();
            this.loadCategories();
            this.getQuestions();
        },

        methods: {
            loadCategories() {
                let url = `/api/question_categories/`;

                axios.get(url).catch(error => {
                    flash(error.response.data, 'danger');
                }).then(({data}) => {
                    this.categories = data;
                });
            },

            openAnswerForm(index) {
                $( this.$refs['form' + index] ).toggle();
            },

            getQuestions() {
                let url = `/api/questions/`;

                axios.get(url).catch(error => {
                    flash(error.response.data, 'danger');
                }).then(({data}) => {
                    this.questions = data.data.slice().reverse();
                });
            },

            store () {
                this.form.type = 'truth';
                this.form.difficulty = 'easy';
                this.form.created_by = this.user.id;

                let uri = `/api/questions/`;

                axios.post(uri, this.form).then(() => {
                    this.getQuestions();
                    this.form = {};

                    flash('Your question has been created.');
                });
            },

            resetForm () {
                this.form = {
                    question: '',
                    question_category_id: ''
                };

                this.editing = false;
            }
        }
    }
</script>
