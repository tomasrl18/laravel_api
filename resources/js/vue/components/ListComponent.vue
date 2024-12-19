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

            <o-pagination
                v-if="postsMeta && postsMeta.total > 0"
                @change="updatePage"
                :total="postsMeta.total"
                v-model:current="currentPage"
                :range-before="2"
                :range-after="2"
                size="small"
                :simple="false"
                :rounded="true"
                :per-page="postsMeta.per_page"
                icon-prev="chevron-left"
                icon-next="chevron-right"
                order="centered"
            ></o-pagination>
        </section>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts: [],
                postsMeta: [],
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
                ],
                currentPage: 1,
            }
        },
        mounted() {
            this.listPage();
        },
        methods: {
            listPage() {
                this.isLoading = true;

                this.$axios.get('/api/post?page=' + this.currentPage)
                    .then(response => {
                        this.posts = response.data.data;
                        this.postsMeta = response.data.meta;
                    })
                    .finally(() => {
                        this.isLoading = false;
                    });
            },
            updatePage(page) {
                this.currentPage = page;
                this.listPage();
            }
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
