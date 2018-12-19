<template>
	<div>
        <img :src="thumbnail"
             class="w-full border border-solid border-grey-light rounded-sm"
             alt="Post image">

        <form method="POST"
              enctype="multipart/form-data">
            <image-upload name="thumbnail"
                          class="mr-1"
                          @loaded="onLoad"></image-upload>
        </form>
    </div>
</template>

<script>
    import ImageUpload from './ImageUpload.vue';

    export default {
    	props: ['post', 'user'],

    	components: { ImageUpload },

    	data() {
    		return {
    			thumbnail: this.post.thumbnail_path
    		}
    	},

    	/*computed() {
    		canUpdate: {
                return this.authorize(user => user.id === this.user.id);
    		}
    	},*/

    	methods: {
    		onLoad(thumbnail) {
    			this.thumbnail = thumbnail.src;

                this.persist(thumbnail.file);
    		},

    		persist(thumbnail) {
    			let data = new FormData();

    			data.append('thumbnail', thumbnail);

    			axios.post(`/api/posts/${this.post.slug}/image`, data)
    				.then(() => flash('Featured Image Uploaded'));
    		}
    	}
    }
</script>