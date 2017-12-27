using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Net;
using System.Threading.Tasks;

namespace ConsoleApplication7
{
    class Program
    {
        static void Main(string[] args)
        {
            string serial = "27046";
            using (var client = new WebClient())
            {
                var result = Convert.ToBoolean(client.DownloadString("http://localhost/s/s.php?serial=" + serial));
                //Console.WriteLine(result);
                if (result)
                {
                    Console.WriteLine("pencere gizlendi"); 
                }
                Console.ReadKey();
            }
        }
    }
}
