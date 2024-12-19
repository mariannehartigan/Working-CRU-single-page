<template>
    income checkbox = paid
    <Income v-for="income in incomes" :key="income.id" :income="income"/>

    expenses<FixedExpenses v-for="expense in expenses" :key="expense.id" :expense="expense"/>
    
    budget<VariableExpenses v-for="budget in budgets" :key="budget.id" :budget="budget"/>
</template>

<script setup>
import Income from './PlanIncome.vue';
import FixedExpenses from './PlanFixedExpenses.vue';
import VariableExpenses from './PlanVariableExpenses.vue';

defineProps({
  incomes: Array,
  expenses: Array,
  budgets: Array,
  plans: Array,
})
</script>