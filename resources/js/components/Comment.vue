<template>
    <div :id="'comment-'+id" class="card">
        <div class="flex border-b border-solid border-grey-light">
            <div class="py-2">
                <a href="#">
                    <img :src="comment.owner.thumbnail_path"
                         class="rounded-full w-12 h-12 mr-2"
                         :alt="comment.owner.name">
                </a>
            </div>

            <div class="pl-2 py-2 w-full">
                <div class="flex justify-between mb-1">
                    <div>
                        <a href="/profiles/' + comment.owner.name"
                           class="font-bold text-black"
                           v-text="comment.owner.name"></a>

                        said <span v-text="ago"></span>
                    </div>

                    <div>
                        <a href="#"
                           class="text-grey hover:text-grey-dark">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div v-if="editing">
                    <form @submit.prevent="update">
                        <div class="mb-4">
                            <wysiwyg v-model="body"></wysiwyg>
                        </div>

                        <button class="fill-btn">
                            Update
                        </button>

                        <button class="fill-btn"
                                @click="editing = false"
                                type="button">
                            Cancel
                        </button>
                    </form>
                </div>

                <div v-else v-html="body" class="mb-4"></div>

                <div v-if="authorize('owns', comment) || authorize('owns', comment.post)">
                    <div v-if="authorize('owns', comment)">
                        <button class="fill-btn mr-1"
                                @click="editing = true"
                                v-if="! editing">
                            Edit
                        </button>

                        <button class="fill-btn mr-1"
                                @click="destroy"
                                v-if="! editing">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment';

    export default {
        props: ['comment'],

        data() {
            return {
                editing: false,
                id: this.comment.id,
                body: this.comment.body,
            };
        },

        computed: {
            ago() {
                return moment(this.comment.created_at).fromNow() + '...';
            }
        },

        methods: {
            update() {
                axios.patch(
                    '/comments/' + this.id, {
                        body: this.body
                    })
                    .catch(error => {
                        flash(error.response.data, 'danger');
                    });

                this.editing = false;

                flash('Updated!');
            },

            destroy() {
                axios.delete('/comments/' + this.id);

                this.$emit('deleted', this.id);
            },
        }
    }
</script>