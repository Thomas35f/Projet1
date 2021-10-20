node {
  stage('SCM') {
    checkout scm
  }
  
   
  
  stage('Analyse Sonarqube') {
    def scannerHome = tool 'sonarqube';
    withSonarQubeEnv() {
      sh "${scannerHome}/bin/sonar-scanner"
    }
  }
  
  
               
}
