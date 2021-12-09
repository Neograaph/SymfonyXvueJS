<template>
    <div class="container">
        <h1>Ceci est notre composant 2 de démo !</h1>
        <button v-on:click="loadCurrentStudentList">Charger la liste des étudiants actuels</button>
        <button v-on:click="loadAllStudentList">Charger la liste de tous les étudiants</button>
        <ul id="studentList">
          <li v-for="student in studentList" :key="student">{{ student }}</li>
        </ul>
    </div>
</template>

<script>
import axios from "axios";
export default {
  name: "DemoComponent",
  data: function () {
    return {
      studentList: ['Aucun'],
    }
  },
  methods: {
      loadCurrentStudentList(event) {
        axios.get("/get-student-list").then(response => {
          this.studentList = response.data;
        });
      },
      loadAllStudentList(event) {
        axios.get("/get-student-list",{ params: { formerStudents: true } }).then(response => {
          this.studentList = response.data;
        });
      }
  }
};
</script>