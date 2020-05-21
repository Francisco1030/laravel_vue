<template>
  <div v-bind:id="nome" class="modal fade" role="dialog" v-bind:aria-labelledby="nome">
    <div class="modal-dialog">
      <div class="modal-content">
        <slot> </slot>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    props: ['nome']
};
</script>
