<template>
    <Plan 
      :incomes="$page.props.incomes" 
      :expenses="$page.props.expenses" 
      :budgets="$page.props.budgets"
      :plans="$page.props.plans"
      />
    <div :style="{'color': 'red' }">
    <Income :incomes="$page.props.incomes"/>
    <Expenses :expenses="$page.props.expenses"/>
    <Budget :budgets="$page.props.budgets"/>
</div>
</template>

<script setup>
import Plan from './Plan/Plan.vue'
import Income from './Income.vue'
import Expenses from './Expenses.vue'
import Budget from './Budget.vue'
defineProps({
  incomes: Array,
  expenses: Array,
  budgets: Array,
  plans: Array,
})
</script>