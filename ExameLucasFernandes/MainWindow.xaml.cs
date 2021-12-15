using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace ExameLucasFernandes
{
    /// <summary>
    /// Interação lógica para MainWindow.xam
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void btCadastrarAluno_Click(object sender, RoutedEventArgs e)
        {
            CadastrarAluno wpf = new CadastrarAluno();
            wpf.ShowDialog();
        }

        private void btCadastrarCurso_Click(object sender, RoutedEventArgs e)
        {
            CadastrarCurso wpf = new CadastrarCurso();
            wpf.ShowDialog();
        }

        private void btCadastarDisciplina_Click(object sender, RoutedEventArgs e)
        {
            CadastrarDisciplina wpf = new CadastrarDisciplina();
            wpf.ShowDialog();
        }

        private void btCadastrarMatricula_Click(object sender, RoutedEventArgs e)
        {
            CadastrarMatricula wpf = new CadastrarMatricula();
            wpf.ShowDialog();
        }

        private void btListarAluno_Click(object sender, RoutedEventArgs e)
        {
            ListarAluno wpf = new ListarAluno();
            wpf.ShowDialog();
        }

        private void btListarCurso_Click(object sender, RoutedEventArgs e)
        {
            ListarCurso wpf = new ListarCurso();
            wpf.ShowDialog();
        }

        private void btListarDisciplina_Click(object sender, RoutedEventArgs e)
        {
            ListarDisciplina wpf = new ListarDisciplina();
            wpf.ShowDialog();
        }

        private void btListarMatricula_Click(object sender, RoutedEventArgs e)
        {
            ListarMatricula wpf = new ListarMatricula();
            wpf.ShowDialog();
        }
    }
}
