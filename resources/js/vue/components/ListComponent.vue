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
            <o-table :data="posts" striped hoverable fullwidth>
                <o-table-column
                    field="id"
                    label="ID"
                    v-slot="post"
                >
                    {{ post.row.id }}
                </o-table-column>
                <o-table-column
                    field="title"
                    label="Title"
                    v-slot="post"
                >
                    {{ post.row.title }}
                </o-table-column>
                <o-table-column
                    field="posted"
                    label="Posted"
                    v-slot="post"
                >
                    {{ post.row.posted }}
                </o-table-column>
                <o-table-column
                    field="category"
                    label="Category"
                    v-slot="post"
                >
                    {{ post.row.category.title }}
                </o-table-column>
                <o-table-column
                    field="actions"
                    label="Actions"
                    v-slot="post"
                >
                    <RouterLink :to="{ name: 'PostEdit', params: { id: post.row.id } }">
                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path class="pencil" fill="#666666" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15t.775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/>
                            </svg>
                        </div>
                    </RouterLink>
                    <RouterLink :to="{ name: 'PostDelete', params: { id: post.row.id } }">
                        <div class="icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                <path class="trash" fill="none" stroke="#666666" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7h16m-10 4v6m4-6v6M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"/>
                            </svg>
                        </div>
                    </RouterLink>
                </o-table-column>
            </o-table>

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

    .icon-container {
        display: inline-block;
        width: 30px;
        height: 30px;
        cursor: pointer;
    }

    .icon-container:hover .pencil {
        fill: #000000;
    }

    .icon-container:hover .trash {
        stroke: #000000;
        fill: #e94141;
    }
</style>
