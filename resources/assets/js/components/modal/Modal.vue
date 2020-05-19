<template>
  <div v-bind:id="nome" class="modal fade" role="dialog" v-bind:aria-labelledby="nome">
    <div class="modal-dialog">
      <div class="modal-content">
        <slot> </slot>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            &times;
          </button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
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
