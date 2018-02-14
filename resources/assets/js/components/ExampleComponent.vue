<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        	axios.post('/search', {
				"name": "Billy",
				"company": "Google",
				"city": "London",
				"event": "key-note-presentation-new-york-05-2016",
				"responded": true,
				"response": "I will be attending",
				"managers": [
					"Tom Jones",
					"Joe Bloggs"
				],
			});
            console.log('Component mounted.')
        }
    }
</script>
