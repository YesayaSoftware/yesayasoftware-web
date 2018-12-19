<template>
    <div>
        <div v-if="signedIn">
            <wysiwyg name="body"
                     class="mb-4"
                     v-model="body"
                     placeholder="Have something to say?"
                     :shouldClear="completed">
            </wysiwyg>

            <button type="submit"
                    class="fill-btn"
                    @click="addComment">
                Comment
            </button>
        </div>

        <div v-else>
            <p class="text-center">
                Please <a href="/login"> Sign in </a> to comment in this post.
            </p>
        </div>
    </div>
</template>

<script>
    import 'jquery.caret';
    import 'at.js';

    export default {
        data() {
            return {
                body: '',
                completed: false
            };
        },

        mounted() {
            $('#body').atwho({
                at: "@",
                delay: 750,
                callbacks: {
                    remoteFilter: function(query, callback) {
                        $.getJSON("/api/users", {name: query}, function(usernames) {
                            callback(usernames)
                        });
                    }
                }
            });
        },

        methods: {
            addComment() {
                axios.post(location.pathname + '/comments', { body: this.body })
                    .catch(error => {
                        flash(error.response.data, 'danger');
                    })
                    .then(({data}) => {
                        this.body = '';
                        this.completed = true;

                        flash('Your comment has been posted.');

                        this.$emit('created', data);
                    });
            }
        }
    }
</script>