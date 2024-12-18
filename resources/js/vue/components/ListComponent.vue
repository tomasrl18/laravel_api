<template>
    <div>
        <h1>Post List</h1>

        <section>
            <o-table :data="posts" :columns="columns" />
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
                        field: "category_id",
                        label: "Category",
                        sortable: true,
                    }
                ]
            }
        },
        mounted() {
            this.$axios.get('/api/post').then(response => {
                this.posts = response.data.data;
                this.isLoading = false;
            })
        }
    }
</script>
