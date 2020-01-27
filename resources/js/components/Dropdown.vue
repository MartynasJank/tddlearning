<template>
    <div class="dropdown relative">
        <div
            aria-haspopup="true"
            :aria-expanded="isOpen"
            class="dropdown-toggle"
            @click.prevent="isOpen = !isOpen">
            <slot name="trigger"></slot>
        </div>

        <div
            v-show="isOpen"
            class="dropdown-menu absolute bg-card py-2 rounded shadow mt-2 text-left"
            :class="align === 'left' ? 'left-0' : 'right-0'"
            :style="{ width }">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            width: { defautl: 'auto' },
            align: { default : 'left' }
        },
        data(){
            return { isOpen : false }
        },
        watch: {
            isOpen(isOpen){
                if(isOpen){
                    document.addEventListener('click', this.closeifClickedOutside);
                }
            }
        },
        methods: {
            closeifClickedOutside(event){
                if(!event.target.closest('.dropdown')){
                    this.isOpen = false;
                    document.removeEventListener('click', this.closeifClickedOutside);
                }
            }
        }
    }
</script>
