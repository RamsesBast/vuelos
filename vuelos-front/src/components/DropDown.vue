<template>
  <div class="">
    <div class="dropdown">
      <input
        v-model="filterText"
        @input="filterOptions"
        @focus="isDropdownOpen = true"
        placeholder="Seleccione una opción"
      />
      <ul v-show="isDropdownOpen">
        <li
          v-for="option in filteredOptions"
          :key="option"
          @click="selectOption(option)"
        >
          {{ option }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    options: {
      type: Array,
      required: true,
    },
  },
  data() {
    return {
      selectedOption: "",
      filterText: "",
      isDropdownOpen: false,
    };
  },
  computed: {
    filteredOptions() {
      return this.options.filter((option) =>
        option.toLowerCase().includes(this.filterText.toLowerCase())
      );
    },
  },
  methods: {
    filterOptions() {},
    selectOption(option) {
      this.selectedOption = option;
      this.isDropdownOpen = false;
      this.filterText = option;
    },
  },
};
</script>

<style scoped>
.dropdown {
  position: relative;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
  position: absolute;
  background-color: #fff;
  border: 1px solid #ccc;
  max-height: 150px;
  overflow-y: auto;
}

li {
  padding: 8px;
  cursor: pointer;
}

li:hover {
  background-color: #f0f0f0;
}
</style>
