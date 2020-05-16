<template>
  <div v-bind:class="definiCor">
    <div class="panel-heading">{{ titulo }}</div>

    <div class="panel-body">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
    props:['titulo', 'cor'],
    computed: {
        definiCor: function() {
            return "panel " + (this.cor || "panel-default");
        }
    }
};
</script>

<style media="screen"> 

.orange {
    background: white;
}

.orange > .panel-heading {
    color: white;
    background-color: orange;
    border-color: orange;
}
</style>
