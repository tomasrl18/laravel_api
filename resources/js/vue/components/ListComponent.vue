<template>
    <div>
        <o-field>
            <h1>Post List</h1>
        </o-field>

        <section>
            <o-loading
                v-model:active="isLoading"
                label="Loading..."
                :cancelable="true"
                fullpage
            ></o-loading>
            <o-table :data="posts" :columns="columns" striped hoverable narrow fullwidth/>
        </section>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: [],
                isLoading: false,
                columns: [
                    {
                        field: "id",
                        label: "ID",
                        width: "40",
                        numeric: true,
                        sortable: true,
                    },
                    {
                        field: "title",
                        label: "Title",
                        sortable: true,
                    },
                    {
                        field: "posted",
                        label: "Posted",
                        sortable: true,
                    },
                    {
                        field: "category.title",
                        label: "Category",
                        sortable: true,
                    }
                ]
            }
        },
        mounted() {
            this.$axios.get('/api/post')
                .then(response => {
                    this.posts = response.data.data;
                })
                .finally(() => {
                    this.isLoading = false;
                });
        }
    }
</script>

<style scoped>
h1 {
    font-size: 1.5rem;
    color: #4a4a4a;
    margin-bottom: 1rem;
}
</style>
