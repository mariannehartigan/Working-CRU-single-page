<template>
    <div>
        {{income.description}} {{ income.amount }} {{ income.day_deposited }}
    </div>
  </template>
 
  <script setup>
  defineProps({
    income: Object,
  })
  </script>