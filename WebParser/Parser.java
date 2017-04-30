import java.io.BufferedReader;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.regex.Matcher;
import java.util.regex.Pattern;


public class Parser {
	
	private static final String FILENAME = "WebParser/Resources/Incident2016";
	private static final String FILE_HEADER = "SL.No,ORGANIZATION BREACHED,RECORDS BREACHED,DATE OF BREACH,TYPE OF BREACH,SOURCE OF BREACH,LOCATION,INDUSTRY";
	private static final String COMMA_DELIMITER = ",";
	private static final String NEW_LINE_SEPARATOR = "\n";
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		try (BufferedReader br = new BufferedReader(new FileReader(FILENAME))) {
			try{
				FileWriter filewriter = new FileWriter("WebParser/Incidents/incidents-2016.csv");
				filewriter.append(FILE_HEADER);
				String sCurrentLine;
			
				while ((sCurrentLine = br.readLine()) != null) {
					Pattern p1 = Pattern.compile("<tr>(.+?)</tr>");
					Pattern p2 = Pattern.compile("<td>(.+?)</td>");
					Matcher m1 = p1.matcher(sCurrentLine);
					while(m1.find()){
					    String rows = m1.group(1);
					    Matcher m2 = p2.matcher(rows);
					    int count = 0;
					    filewriter.append(NEW_LINE_SEPARATOR);
					    while(m2.find() && count<7){
					    	filewriter.append(m2.group(1));
					    	if(count < 6){
					    		filewriter.append(COMMA_DELIMITER);
					    	}
					    	count++;
					    }
					}
							
				}
				
				filewriter.flush();
				filewriter.close();
				System.out.println("done");
		} catch (IOException e) {
			e.printStackTrace();
		}
		
		} catch (IOException e) {
			e.printStackTrace();
		}
		
	}

}
