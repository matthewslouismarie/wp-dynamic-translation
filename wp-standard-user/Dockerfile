FROM wordpress

# Update packages
RUN apt-get update

# Switch to standard user
RUN useradd -m matthewslouismarie
RUN apt-get install -y sudo
COPY config/sudoers /etc/sudoers.d/sudoers
RUN chmod 0444 /etc/sudoers.d/sudoers
USER matthewslouismarie

CMD sudo apache2-foreground
