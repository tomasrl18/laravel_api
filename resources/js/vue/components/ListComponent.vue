<template>
    <div>
        <h1>Post List</h1>

        <o-button @click="() => { console.log('Hello world') }">
            Click me
        </o-button>

        <o-field label="Email" variante="danger">
            <o-input type="email" value="tomas@test.com"></o-input>
        </o-field>
    </div>
</template>
