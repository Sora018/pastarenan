class Pessoa {
  constructor(nome, idade) {
      this.nome = nome;
      this.idade = idade;
  }
}

class Estudante extends Pessoa {
  constructor(nome, idade, turma) {
      super(nome, idade);
      this.turma = turma;
  }
}

class Professor extends Pessoa {
  constructor(nome, idade, disciplina) {
      super(nome, idade);
      this.disciplina = disciplina;
  }
}

const estudante = new Estudante("Maria", 18, "12A");
const professor = new Professor("João", 35, "Matemática");

console.log(`Estudante: nome = ${estudante.nome}, idade = ${estudante.idade}, turma = ${estudante.turma}`);
console.log(`Professor: nome = ${professor.nome}, idade = ${professor.idade}, disciplina = ${professor.disciplina}`);
