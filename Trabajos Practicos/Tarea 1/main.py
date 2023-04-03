import openai

# Tutorial en vídeo: https://youtu.be/1Pl1FWHKHXQ

# Genera una API Key desde https://openai.com/api
openai.api_key = "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"

while True:

    prompt = input("\nIntroduce una pregunta: ")

    if prompt == "exit":
        break

    completion = openai.Completion.create(engine="text-davinci-003",
                                          prompt=prompt,
                                          max_tokens=2048)

    print(completion.choices[0].text)